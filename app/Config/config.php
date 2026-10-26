<?php
// Configuración Global de la Aplicación Sagaretxe

define('APP_NAME', 'Sagaretxe – La Sidrería Vasca en Madrid');
define('APP_TAGLINE', 'Pintxos, Carnes a la Brasa y Tradición Vasca en Chamberí');
define('APP_DESCRIPTION', 'Sidrería Sagaretxe en el barrio de Chamberí (Madrid). Especialistas en auténtica gastronomía vasca: barra con más de 150 pintxos, txuleta de vaca vieja al carbón de encina, pescados al estilo Donostia y sidra al txotx.');

// Detectar URL base automáticamente
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$baseDir = dirname($scriptName);
$baseDir = ($baseDir === '/' || $baseDir === '\\') ? '' : rtrim($baseDir, '/\\');

// Si baseDir termina en /public, nunca debe exponerse en las URLs canónicas públicas
if (preg_match('#/public$#i', $baseDir)) {
    $parentDir = dirname($baseDir);
    $baseDir = ($parentDir === '/' || $parentDir === '\\') ? '' : rtrim($parentDir, '/\\');
}
define('BASE_URL', $protocol . $host . $baseDir);

// Configuración de API de Reservas y Club (app-central)
// Prioridad: Variable de entorno o fallback a API en producción / localhost
$apiEndpoint = getenv('SAGARETXE_API_URL') ?: 'https://app.sagaretxe.net/api';
define('API_BASE_URL', rtrim($apiEndpoint, '/'));

// Datos de Contacto y Ubicación
define('RESTAURANT_ADDRESS', 'C/ Eloy Gonzalo, 26, 28010 Madrid (Chamberí)');
define('RESTAURANT_PHONE_1', '914 46 25 88');
define('RESTAURANT_PHONE_2', '914 45 60 23');
define('RESTAURANT_PHONE_MOBILE_1', '622 179 060');
define('RESTAURANT_PHONE_MOBILE_2', '633 179 060');
define('RESTAURANT_EMAIL', 'info@sagaretxe.net');

// Horarios
define('HOURS_DOM_JUE', '12:00 – 17:00 y 19:00 – 00:30');
define('HOURS_VIE_SAB', '12:00 – 17:00 y 19:00 – 01:00');

// Redes Sociales
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/profile.php?id=61580781696763');
define('SOCIAL_TWITTER', 'https://twitter.com/clubsagaretxe');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/clubsagaretxe/');

// Descuento Club
define('CLUB_DISCOUNT', '12%');
