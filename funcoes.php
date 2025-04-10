<?php
// FUNÇÃO PARA GERAR SENHA ALEATORIA
function gerarSenha() {
    $numeros = rand(1000, 9999); // Gera 4 números aleatórios
    $letras = chr(rand(65, 90)) . chr(rand(65, 90)); // Gera 2 letras aleatórias (A-Z)

    return $numeros . $letras; // Concatena números e letras
}
?>