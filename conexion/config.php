<?php
// Configuración de la base de datos. Se lee de variables de entorno
// (ver .env.example / docker-compose.yml); no guardes credenciales en el código.
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: '');
define('DB_DATABASE', getenv('DB_DATABASE') ?: 'mascotas');
?>
