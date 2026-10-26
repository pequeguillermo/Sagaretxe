<?php
/**
 * Sagaretxe – Front Controller
 * Arquitectura MVC en PHP Nativo
 */

declare(strict_types=1);

// Cargar configuración global
require_once __DIR__ . '/../app/Config/config.php';

// Autoloader PSR-4 simple para el namespace App
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Inicializar motor de traducción e idiomas
\App\Services\Language::init();

if (!function_exists('__')) {
    function __(string $key, ?string $default = null): string {
        return \App\Services\Language::get($key, $default);
    }
}
if (!function_exists('lang')) {
    function lang(): string {
        return \App\Services\Language::current();
    }
}
if (!function_exists('isEn')) {
    function isEn(): bool {
        return \App\Services\Language::isEnglish();
    }
}
if (!function_exists('langUrl')) {
    function langUrl(string $path = '/', ?string $targetLang = null): string {
        return \App\Services\Language::url($path, $targetLang);
    }
}
if (!function_exists('switchLangUrl')) {
    function switchLangUrl(string $targetLang): string {
        return \App\Services\Language::switchUrl($targetLang);
    }
}

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\MenuController;
use App\Controllers\PageController;
use App\Controllers\ReservationController;
use App\Controllers\ClubController;
use App\Controllers\EventController;

$router = new Router();

// Rutas de Páginas Principales
$router->get('/', [HomeController::class, 'index']);
$router->get('/nosotros', [PageController::class, 'nosotros']);
$router->get('/pintxos', [MenuController::class, 'pintxos']);
$router->get('/carta', [MenuController::class, 'carta']);
$router->get('/menus', [MenuController::class, 'grupos']);
$router->get('/menu-sagaretxe-2', [MenuController::class, 'grupos']); // Redirección/Alias para compatibilidad con la web antigua
$router->get('/eventos', [PageController::class, 'eventos']);
$router->get('/club', [ClubController::class, 'index']);
$router->get('/club-sagaretxe', [ClubController::class, 'index']); // Alias
$router->get('/galeria', [PageController::class, 'galeria']);
$router->get('/galeria-fotos', [PageController::class, 'galeria']); // Alias
$router->get('/contacto', [PageController::class, 'contacto']);
$router->get('/reservas', [ReservationController::class, 'index']);

// Rutas de API Interna (Conexión sin plugins hacia backend central)
$router->get('/api/reservations/availability', [ReservationController::class, 'availability']);
$router->post('/api/reservations', [ReservationController::class, 'store']);
$router->post('/api/club', [ClubController::class, 'store']);
$router->post('/api/eventos', [EventController::class, 'store']);

// Despachar la petición
$router->dispatch();
