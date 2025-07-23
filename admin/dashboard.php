<?php
// admin/dashboard.php
require __DIR__ . '/../includes/header.php';
?>
<h2>Painel de Administração</h2>

<table id="tabela-pedidos-admin">
    <thead>
      <tr><th>ID</th><th>Cliente</th><th>Descrição</th><th>Status</th><th>Data</th><th>Accão</th></tr>
    </thead>
    <tbody></tbody>
</table>

<?php require __DIR__ . '/../includes/footer.php'; ?>
