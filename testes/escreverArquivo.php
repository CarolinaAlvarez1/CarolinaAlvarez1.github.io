<?php
 $arquivo = fopen("texto.txt","a");

 fwrite($arquivo, "\n");
 fwrite($arquivo, 'escrevendo');

 fclose($arquivo);



?>