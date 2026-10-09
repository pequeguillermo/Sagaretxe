<?php
namespace App\Core;

class View {
    public static function render(string $viewPath, array $data = [], string $layout = 'layouts/main'): void {
        extract($data);

        $viewFile = __DIR__ . '/../Views/' . $viewPath . '.php';
        if (!file_exists($viewFile)) {
            echo "Error: Vista '{$viewPath}' no encontrada.";
            return;
        }

        // Capturar contenido de la vista
        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        // Renderizar dentro del layout
        if ($layout) {
            $layoutFile = __DIR__ . '/../Views/' . $layout . '.php';
            if (file_exists($layoutFile)) {
                require $layoutFile;
                return;
            }
        }

        echo $content;
    }

    public static function json(array $data, int $statusCode = 200): void {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
