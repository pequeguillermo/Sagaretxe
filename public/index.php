<?php
/**
 * Sagaretxe – Front Controller
 * Arquitectura MVC en PHP Nativo
 */

declare(strict_types=1);

// Definir rutas base del sistema si no vienen definidas desde el index.php raíz
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
if (!defined('APP_PATH')) {
    define('APP_PATH', ROOT_PATH . '/app');
}
if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', __DIR__);
}

// Cargar configuración global
$configFile = APP_PATH . '/Config/config.php';
if (!file_exists($configFile)) {
    $configFile = __DIR__ . '/../app/Config/config.php';
}
require_once $configFile;

// Autoloader PSR-4 para el namespace App con detección de mayúsculas/minúsculas
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $relFile = str_replace('\\', '/', $relativeClass) . '.php';

    $candidateBases = [
        defined('APP_PATH') ? APP_PATH : null,
        __DIR__ . '/../app',
        dirname(__DIR__) . '/app'
    ];

    foreach ($candidateBases as $base) {
        if (!$base) continue;
        $target = $base . '/' . $relFile;
        if (file_exists($target)) {
            require $target;
            return;
        }
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
