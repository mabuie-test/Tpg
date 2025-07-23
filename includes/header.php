<?php
// includes/header.php
require __DIR__ . '/../includes/config.php';
require __DIR__ . '/../classes/Database.php';
require __DIR__ . '/../classes/Auth.php';
require __DIR__ . '/../classes/Mailer.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js" defer></script>
</head>
<body>
<header>
    <nav>
        <a href="/index.php">Início</a>
        <?php if(Auth::check()): ?>
            <span>Olá, <?= htmlspecialchars(Auth::user()['nome']) ?></span>
            <?php if(Auth::user()['tipo']==='admin'): ?>
                <a href="/admin/dashboard.php">Painel Admin</a>
            <?php else: ?>
                <a href="/clientes/meus_pedidos.php">Meus Pedidos</a>
            <?php endif; ?>
            <a href="/logout.php">Sair</a>
        <?php else: ?>
            <a href="/login.php">Login</a>
            <a href="/register.php">Registar</a>
        <?php endif; ?>
    </nav>
</header>
<main>
