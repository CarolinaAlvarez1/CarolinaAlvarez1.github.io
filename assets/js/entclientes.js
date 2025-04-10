function enviarFormulario() {
    document.getElementById("formClientes").action = "geraTXT.php";
    document.getElementById("formClientes").submit();
}

function gerapdf() {
    document.getElementById("formClientes").action = "gerarPDF.php";
    document.getElementById("formClientes").submit();
}
/*function gravarCliente() {
    let checkboxes = document.querySelectorAll(".selectRow:checked");
    if (checkboxes.length !== 1) {
        alert("Selecione exatamente um cliente para alterar.");
        return;
    }
    let codigo = checkboxes[0].value;
    window.location.href = "inserirCliente.php?codigo=" + codigo;
}*/

document.addEventListener("DOMContentLoaded", function () {
    let btnVoltar = document.getElementById("btnVoltar");

    if (btnVoltar) {
        btnVoltar.addEventListener("click", function () {
            window.location.href = "dashboard.html";
        });
    } else {
        console.error("Erro: Botão 'Voltar' não encontrado.");
    }
});


