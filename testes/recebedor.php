<?php 
/*$nomes = filter_input(INPUT_POST, 'nome');

$nome = file_get_contents('texto.txt');
if($nomes){   
    $nome .= "\n".$nomes;
    file_put_contents('texto.txt',$nome);
}
header('Location: index.php');*/
echo '<pre>';
print_r($_FILES);
echo '</pre>';