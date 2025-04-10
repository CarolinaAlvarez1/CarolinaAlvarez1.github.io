<?php
include_once("./banco/bancoClientes.php");
$pasta = "arquivos";
if(!is_dir($pasta)){
    mkdir($pasta, 0755, true);
}
$hora = date("Y-m-dHis");
$arquivo = $pasta."/clientes".$hora.".txt";
$nomeArquivo = "clientes".$hora.".txt";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check'])) {
    $escreve = fopen($arquivo, "w");
    foreach ($_POST['check'] as $idSelecionado) {
        foreach ($clientes as $cliente) {
            if ($cliente['id'] == $idSelecionado) {
                fwrite($escreve, $cliente['nome'].' '.$cliente['email']); 
                fwrite($escreve, "\n");
        }
    }
}
fclose($escreve);
header("Content-Description: File Transfer");
header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=$nomeArquivo");
header("Content-Length: " . filesize($arquivo));
readfile($arquivo);
exit(); 
}
else {
    header("Location: entclientes.php");
}
?>