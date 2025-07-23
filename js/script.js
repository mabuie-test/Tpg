// js/script.js

async function apiFetch(params, method='GET') {
    let url = '/api/pedidos.php?' + new URLSearchParams(params);
    let opts = { method };
    if (method === 'POST') {
        opts.headers = {'Content-Type':'application/x-www-form-urlencoded'};
        opts.body = new URLSearchParams(params);
    }
    let res = await fetch(url, opts);
    return await res.json();
}

// Cliente: lista e submete pedidos
if (document.getElementById('form-pedido')) {
    const form = document.getElementById('form-pedido');
    form.addEventListener('submit', async e => {
        e.preventDefault();
        const desc = form.descricao.value;
        let resp = await apiFetch({ action:'create', descricao: desc }, 'POST');
        if (resp.success) location.reload();
    });

    // carregar lista
    apiFetch({ action:'list' }).then(data => {
        const tbody = document.querySelector('#tabela-meus-pedidos tbody');
        data.forEach(p => {
            let tr = `<tr>
                <td>${p.id}</td>
                <td>${p.descricao}</td>
                <td>${p.status}</td>
                <td>${p.criado_em}</td>
            </tr>`;
            tbody.insertAdjacentHTML('beforeend', tr);
        });
    });
}

// Admin: listar e actualizar pedidos
if (document.getElementById('tabela-pedidos-admin')) {
    apiFetch({ action:'list_all' }).then(data => {
        const tbody = document.querySelector('#tabela-pedidos-admin tbody');
        data.forEach(p => {
            let row = document.createElement('tr');
            row.innerHTML = `
              <td>${p.id}</td>
              <td>${p.nome}</td>
              <td>${p.descricao}</td>
              <td>
                <select data-id="${p.id}">
                  <option${p.status==='pendente'?' selected':''}>pendente</option>
                  <option${p.status==='progresso'?' selected':''}>progresso</option>
                  <option${p.status==='concluído'?' selected':''}>concluído</option>
                </select>
              </td>
              <td>${p.criado_em}</td>
              <td><button data-update="${p.id}">Actualizar</button></td>`;
            tbody.appendChild(row);
        });
        tbody.querySelectorAll('button[data-update]').forEach(btn => {
            btn.addEventListener('click', async () => {
                const id = btn.getAttribute('data-update');
                const sel = tbody.querySelector(`select[data-id="${id}"]`);
                await apiFetch({ action:'update', id: id, status: sel.value }, 'POST');
                alert('Status actualizado.');
            });
        });
    });
}
