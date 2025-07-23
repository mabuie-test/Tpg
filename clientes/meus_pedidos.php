<?php
// clientes/meus_pedidos.php
require __DIR__ . '/../includes/header.php';
?>
<h2>Meus Pedidos</h2>

<form id="form-pedido">
    <textarea name="descricao" placeholder="Descreva o seu pedido..." required></textarea>
    <button type="submit">Submeter Pedido</button>
</form>

<table id="tabela-meus-pedidos">
    <thead><tr><th>ID</th><th>Descrição</th><th>Status</th><th>Data</th></tr></thead>
    <tbody></tbody>
</table>

<?php require __DIR__ . '/../includes/footer.php'; ?>
