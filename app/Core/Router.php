<?php
namespace App\Core;

class Router {
    private array $routes = [];

    public function get(string $path, $handler): void {
        $this->routes['GET'][$this->normalizePath($path)] = $handler;
    }

    public function post(string $path, $handler): void {
        $this->routes['POST'][$this->normalizePath($path)] = $handler;
    }

    private function normalizePath(string $path): string {
        $path = trim($path, '/');
        return $path === '' ? '/' : '/' . $path;
    }

    public function dispatch(): void {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        if ($method === 'HEAD') {
            $method = 'GET';
        }
        $uri = $_SERVER['REQUEST_URI'] ?? '/';

        // Eliminar query string si existe
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }

        // Si la URL pública solicitada incluye /public, redirigir 301 de inmediato a la ruta canónica limpia
        if ($uri === '/public' || strpos($uri, '/public/') === 0) {
            $cleanUri = substr($uri, 7);
            $cleanUri = $cleanUri === '' ? '/' : $cleanUri;
            $queryString = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
            header('Location: ' . BASE_URL . $cleanUri . $queryString, true, 301);
            exit;
        }

        // Quitar la ruta base si se ejecuta en un subdirectorio (ej. /Sagaretxe/public)
        $scriptName = dirname($_SERVER['SCRIPT_NAME'] ?? '');
        if ($scriptName !== '/' && $scriptName !== '\\' && strpos($uri, $scriptName) === 0) {
            $uri = substr($uri, strlen($scriptName));
        }

        $uri = $this->normalizePath($uri);

        // Soporte bilingüe: Prefijo /en
        if ($uri === '/en' || strpos($uri, '/en/') === 0) {
            \App\Services\Language::setLang('en');
            $uri = substr($uri, 3);
            $uri = $this->normalizePath($uri);
        } else {
            // Si la ruta no tiene /en, aseguramos idioma español salvo que venga en sesión/parámetro
            if (!isset($_GET['lang'])) {
                \App\Services\Language::setLang('es');
            }
        }

        // Aliases en inglés para URLs amigables
        $englishAliases = [
            '/menu' => '/carta',
            '/about' => '/nosotros',
            '/reservations' => '/reservas',
            '/contact' => '/contacto',
            '/group-menus' => '/menus',
            '/gallery' => '/galeria',
            '/events' => '/eventos'
        ];

        if (isset($englishAliases[$uri])) {
            $uri = $englishAliases[$uri];
        }

        $handler = $this->routes[$method][$uri] ?? null;

        if (!$handler) {
            http_response_code(404);
            View::render('pages/404', [
                'title' => 'Página no encontrada – Sagaretxe',
                'metaDescription' => 'La página que busca no existe.'
            ]);
            return;
        }

        if (is_array($handler)) {
            [$class, $action] = $handler;
            $controller = new $class();
            $controller->$action();
        } elseif (is_callable($handler)) {
            call_user_func($handler);
        }
    }
}
