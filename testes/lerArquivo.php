<?php
$arquivo = fopen("texto.txt","r"); //abre o arquivo
$byte = filesize("texto.txt"); //tamanho do arquivo
// while(!feof($arquivo)){
//    $nome =  fgets($arquivo);
//    echo $nome . "<br>";

// }
while($nome = fgets($arquivo)){
   echo $nome . "<br>";
}


fclose($arquivo);
?>