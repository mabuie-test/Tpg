<?php
// register.php
require __DIR__ . '/includes/config.php';
require __DIR__ . '/classes/Database.php';
require __DIR__ . '/classes/Auth.php';
require __DIR__ . '/classes/Mailer.php';

$erro = '';
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $nome  = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $pdo = Database::getInstance();
    $stmt = $pdo->prepare("INSERT INTO users(nome,email,senha_hash,tipo,criado_em) VALUES(?,?,?, 'cliente', NOW())");
    try {
        $stmt->execute([$nome,$email,$senha]);
        Mailer::send($email, $nome, 'Bem-vindo!', "Olá $nome, obrigado por se registar.");
        header('Location: login.php');
        exit;
    } catch (PDOException $e) {
        $erro = 'Erro no registo: email já existe.';
    }
}

require __DIR__ . '/includes/header.php';
?>
<h2>Registar</h2>
<?php if($erro): ?><p class="erro"><?= $erro ?></p><?php endif; ?>
<form method="post">
    <input name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Registar</button>
</form>
<?php require __DIR__ . '/includes/footer.php'; ?>
