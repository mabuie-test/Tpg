<?php
// api/pedidos.php
require __DIR__ . '/../includes/config.php';
require __DIR__ . '/../classes/Database.php';
require __DIR__ . '/../classes/Auth.php';
require __DIR__ . '/../classes/Mailer.php';

header('Content-Type: application/json');
$pdo = Database::getInstance();
$action = $_REQUEST['action'] ?? '';

// Verifica sessão
if (!Auth::check()) {
    echo json_encode(['error'=>'Não autenticado']);
    exit;
}

// Criar novo pedido
if ($action==='create' && $_SERVER['REQUEST_METHOD']==='POST') {
    $user = Auth::user();
    $desc = trim($_POST['descricao']);
    $stmt = $pdo->prepare("INSERT INTO pedidos(user_id, descricao, status, criado_em) VALUES(?,?, 'pendente', NOW())");
    $stmt->execute([$user['id'], $desc]);
    // envia email institucional
    Mailer::send(
        MAIL_FROM,
        MAIL_FROM_NAME,
        "Novo Pedido de {$user['nome']}",
        "Pedido: $desc"
    );
    echo json_encode(['success'=>true]);
    exit;
}

// Listar pedidos do próprio cliente
if ($action==='list' && Auth::user()['tipo']==='cliente') {
    $user = Auth::user();
    $stmt = $pdo->prepare("SELECT * FROM pedidos WHERE user_id = ? ORDER BY criado_em DESC");
    $stmt->execute([$user['id']]);
    echo json_encode($stmt->fetchAll());
    exit;
}

// Listar todos (Admin)
if ($action==='list_all' && Auth::user()['tipo']==='admin') {
    $stmt = $pdo->query("SELECT p.*, u.nome FROM pedidos p JOIN users u ON p.user_id=u.id ORDER BY p.criado_em DESC");
    echo json_encode($stmt->fetchAll());
    exit;
}

// Atualizar status (Admin)
if ($action==='update' && $_SERVER['REQUEST_METHOD']==='POST' && Auth::user()['tipo']==='admin') {
    $id = intval($_POST['id']);
    $status = $_POST['status'];
    $stmt = $pdo->prepare("UPDATE pedidos SET status = ?, atualizado_em=NOW() WHERE id = ?");
    $stmt->execute([$status, $id]);
    echo json_encode(['success'=>true]);
    exit;
}

echo json_encode(['error'=>'Ação inválida']);
