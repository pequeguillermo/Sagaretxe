<?php
namespace App\Core;

class View {
    /**
     * Resuelve de forma robusta la ruta absoluta de una vista en cualquier entorno de servidor
     * (Linux ext4 case-sensitive, Windows, Plesk, cPanel, Docker, Apache con/sin mod_rewrite).
     *
     * Soporta:
     * 1. Comprobación directa con rutas normalizadas sin sintaxis "../".
     * 2. Búsqueda insensible a mayúsculas y minúsculas (ej. Views vs views, Home vs home, Index vs index).
     * 3. Múltiples ubicaciones raíz (app/Views, app/views, Views, views, public/Views).
     * 4. Búsqueda recursiva de rescate para asegurar que nunca falle al descomprimir por FTP.
     */
    public static function resolveViewPath(string $viewPath): ?string {
        $cleanPath = str_replace('\\', '/', trim($viewPath, '/'));
        if (!str_ends_with(strtolower($cleanPath), '.php')) {
            $cleanPath .= '.php';
        }

        // Directorios base donde pueden residir las vistas según la configuración del servidor
        $candidateDirs = [];

        if (defined('APP_PATH')) {
            $candidateDirs[] = rtrim(APP_PATH, '/\\') . '/Views';
            $candidateDirs[] = rtrim(APP_PATH, '/\\') . '/views';
        }

        $appDir = dirname(__DIR__); // Directorio /app
        $candidateDirs[] = $appDir . '/Views';
        $candidateDirs[] = $appDir . '/views';

        if (defined('ROOT_PATH')) {
            $candidateDirs[] = rtrim(ROOT_PATH, '/\\') . '/app/Views';
            $candidateDirs[] = rtrim(ROOT_PATH, '/\\') . '/app/views';
            $candidateDirs[] = rtrim(ROOT_PATH, '/\\') . '/Views';
            $candidateDirs[] = rtrim(ROOT_PATH, '/\\') . '/views';
        }

        $rootDir = dirname($appDir); // Raíz del proyecto
        $candidateDirs[] = $rootDir . '/app/Views';
        $candidateDirs[] = $rootDir . '/app/views';
        $candidateDirs[] = $rootDir . '/Views';
        $candidateDirs[] = $rootDir . '/views';

        if (!empty($_SERVER['DOCUMENT_ROOT'])) {
            $docRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/\\');
            $candidateDirs[] = $docRoot . '/app/Views';
            $candidateDirs[] = $docRoot . '/app/views';
            $candidateDirs[] = $docRoot . '/Views';
            $candidateDirs[] = $docRoot . '/views';
            $candidateDirs[] = dirname($docRoot) . '/app/Views';
            $candidateDirs[] = dirname($docRoot) . '/app/views';
        }

        // Eliminar duplicados vacíos o nulos
        $candidateDirs = array_unique(array_filter($candidateDirs));

        // 1. Comprobación directa (rápida)
        foreach ($candidateDirs as $dir) {
            $file = $dir . '/' . $cleanPath;
            if (file_exists($file)) {
                return $file;
            }
        }

        // 2. Comprobación insensible a mayúsculas/minúsculas segmento a segmento
        foreach ($candidateDirs as $dir) {
            if (!is_dir($dir)) {
                continue;
            }
            $matched = self::findCaseInsensitive($dir, $cleanPath);
            if ($matched !== null) {
                return $matched;
            }
        }

        // 3. Rescate: búsqueda del archivo por nombre base en los directorios de vistas
        $baseName = basename($cleanPath);
        foreach ($candidateDirs as $dir) {
            if (!is_dir($dir)) {
                continue;
            }
            $found = self::searchFileRecursive($dir, $baseName);
            if ($found !== null) {
                return $found;
            }
        }

        return null;
    }

    /**
     * Resuelve segmentos de ruta de manera case-insensitive en sistemas de archivos Linux ext4
     */
    protected static function findCaseInsensitive(string $baseDir, string $relativePath): ?string {
        $parts = explode('/', $relativePath);
        $current = realpath($baseDir) ?: $baseDir;

        foreach ($parts as $part) {
            if (!is_dir($current)) {
                return null;
            }

            $entries = scandir($current);
            if ($entries === false) {
                return null;
            }

            $matched = null;
            foreach ($entries as $entry) {
                if (strcasecmp($entry, $part) === 0) {
                    $matched = $entry;
                    break;
                }
            }

            if ($matched === null) {
                return null;
            }

            $current .= DIRECTORY_SEPARATOR . $matched;
        }

        return file_exists($current) ? $current : null;
    }

    /**
     * Búsqueda recursiva de rescate si la jerarquía fue alterada al descomprimir
     */
    protected static function searchFileRecursive(string $dir, string $filename): ?string {
        $items = @scandir($dir);
        if ($items === false) {
            return null;
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $fullPath = $dir . DIRECTORY_SEPARATOR . $item;
            if (is_dir($fullPath)) {
                $sub = self::searchFileRecursive($fullPath, $filename);
                if ($sub !== null) {
                    return $sub;
                }
            } elseif (strcasecmp($item, $filename) === 0) {
                return $fullPath;
            }
        }

        return null;
    }

    /**
     * Renderiza una vista dentro de su layout correspondiente
     */
    public static function render(string $viewPath, array $data = [], string $layout = 'layouts/main'): void {
        extract($data);

        $viewFile = self::resolveViewPath($viewPath);

        if (!$viewFile) {
            http_response_code(500);
            echo "Error: Vista '{$viewPath}' no encontrada.";
            return;
        }

        // Capturar contenido de la vista
        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        // Renderizar dentro del layout si está configurado
        if ($layout) {
            $layoutFile = self::resolveViewPath($layout);
            if ($layoutFile && file_exists($layoutFile)) {
                require $layoutFile;
                return;
            }
        }

        // Fallback: mostrar contenido directo si no se localiza el layout
        echo $content;
    }

    /**
     * Emite una respuesta JSON estructurada
     */
    public static function json(array $data, int $statusCode = 200): void {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
