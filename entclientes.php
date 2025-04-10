<?php
include_once("./banco/bancoClientes.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esteira Clientes</title>
    <link rel="stylesheet" href="assets/css/clientes.css">
    <script src="assets/js/entclientes.js"></script>

</head>
<body>
    <div class="page">
        <form id="formClientes" method="POST">
        <h1>Esteira Clientes</h1>
        <!-- <p>Esteira Clientes.</p> -->
    <table>
        <tr>
            <th><input type="checkbox" id="selectAll"></th> 
            <th>Nome</th>
            <th>E-mail</th>
            <th>Fidelidade</th>
        </tr>

        <?php      
        foreach ($clientes as $cliente): ?>
            <tr>
                <td><input type="checkbox" name="check[]" class="selectRow" value="<?= $cliente['id'] ?>"></td>
                <td><?= htmlspecialchars($cliente['nome']) ?></td>
                <td><?= htmlspecialchars($cliente['email']) ?></td>
                <td><?= htmlspecialchars($cliente['fidelidade']) ?></td>
            </tr>
            <!-- <input type="hidden" name="codigo" id="codigoCliente" "> -->
        <?php endforeach; ?>
    </table>

    <br>
    <button type="button" class="btn" onclick="window.location.href='inserirCliente.php';">Incluir</button>
    <button type="button" class="btn"onclick="gravarCliente()">Altera</button>
    <button type="button" class="btn" onclick="enviarFormulario()">Gerar TXT</button>
    <button type="button" class="btn">Incluir TXT</button>
    <button type="button" class="btn" onclick="gerapdf()">PDF</button>
    <button type="button" class="btn">excel </button>
    <button type="button" class="btn" onclick="removerSelecionados()">Excluir</button>
    <button type="button" class="btn" id="btnVoltar">Voltar</button>
</form>
    </div>
    
</body>
</html>
<script>

    // Selecionar ou deselecionar todos os checkboxes
document.getElementById("selectAll").addEventListener("change", function () {
    let checkboxes = document.querySelectorAll(".selectRow");
    checkboxes.forEach(cb => {
        cb.checked = this.checked;
        toggleRowSelection(cb);
    });
});

// Destacar linha ao selecionar checkbox
document.querySelectorAll(".selectRow").forEach(checkbox => {
    checkbox.addEventListener("change", function () {
        toggleRowSelection(this);
    });
});

function toggleRowSelection(checkbox) {
    let row = checkbox.closest("tr");
    if (checkbox.checked) {
        row.classList.add("selected");
    } else {
        row.classList.remove("selected");
    }
}

// Remover linhas selecionadas
function removerSelecionados() {
    let selecionados = document.querySelectorAll(".selectRow:checked");
    if (selecionados.length === 0) {
        alert("Selecione pelo menos um cliente para excluir.");
        return;
    }

    if (confirm("Tem certeza que deseja excluir os clientes selecionados?")) {
        selecionados.forEach(cb => cb.closest("tr").remove());
    }
}
</script>
