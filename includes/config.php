<?php
// includes/config.php

// === Configuração Base de Dados ===
$host    = 'localhost';
$dbname  = 'philaded_Philaseanproviderwebsite';
$user    = 'philaded_Philaseanproviderwebsite';
$pass    = 'Philaseanproviderwebsite';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_PERSISTENT         => false,
    ]);
} catch (PDOException $e) {
    // Em ambiente de produção, registar o erro noutro local seguro
    exit('Erro na ligação à base de dados: ' . $e->getMessage());
}

// Disponibiliza o PDO para as classes
define('DB_CONNECTION', $pdo);

// === Configuração Email (PHPMailer) ===
define('MAIL_HOST', 'smtp.seudominio.co.mz');
define('MAIL_USER', 'noreply@empresa.co.mz');
define('MAIL_PASS', 'senha_email');
define('MAIL_PORT', 587);
define('MAIL_FROM', 'noreply@empresa.co.mz');
define('MAIL_FROM_NAME', 'Sua Empresa');

// Autoload Composer (PHPMailer, etc.)
require __DIR__ . '/../vendor/autoload.php';
