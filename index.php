<?php
/**
 * Sagaretxe – Entrada Principal MVC para Apache / Plesk / cPanel / Shared Hosting
 */
declare(strict_types=1);

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}
if (!defined('APP_PATH')) {
    define('APP_PATH', __DIR__ . '/app');
}
if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', __DIR__ . '/public');
}

$publicIndex = __DIR__ . '/public/index.php';
if (file_exists($publicIndex)) {
    require_once $publicIndex;
} else {
    http_response_code(500);
    echo "Error del servidor: No se encuentra public/index.php.";
}
