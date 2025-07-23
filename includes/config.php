<?php
// includes/config.php

// === Configuração Base de Dados ===
define('DB_HOST', 'localhost');
define('DB_NAME', 'seu_banco');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');

// === Configuração Email (PHPMailer) ===
define('MAIL_HOST', 'smtp.seudominio.co.mz');
define('MAIL_USER', 'noreply@empresa.co.mz');
define('MAIL_PASS', 'senha_email');
define('MAIL_PORT', 587);
define('MAIL_FROM', 'noreply@empresa.co.mz');
define('MAIL_FROM_NAME', 'Sua Empresa');

// Autoload Composer (PHPMailer, etc.)
require __DIR__ . '/../vendor/autoload.php';
