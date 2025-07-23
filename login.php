<?php
// login.php
require __DIR__ . '/includes/config.php';
require __DIR__ . '/classes/Database.php';
require __DIR__ . '/classes/Auth.php';

$erro = '';
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if (Auth::attempt($email, $senha)) {
        header('Location: index.php');
        exit;
    }
    $erro = 'Email ou senha inválidos.';
}

require __DIR__ . '/includes/header.php';
?>
<h2>Login</h2>
<?php if($erro): ?><p class="erro"><?= $erro ?></p><?php endif; ?>
<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>
<?php require __DIR__ . '/includes/footer.php'; ?>
