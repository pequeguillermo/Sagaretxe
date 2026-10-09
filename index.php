<?php
// Redirección directa al directorio público para acceso vía Apache en localhost
header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/public/');
exit;
