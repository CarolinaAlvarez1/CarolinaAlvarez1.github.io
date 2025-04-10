<?php
$tecno = ['html' => 'HTML',
'php' => 'PHP',
'javascript' => 'JAVASCRIPT'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
 <form method="POST">
    <select name="opcao[]" multiple>
        <?php foreach($tecno as $chave => $t) :?>
            <option value="<?= $chave?>"><?= $t?></option>            
            <?php endforeach; ?>
    </select>
    <input type="submit" value="enviar" class="btn" /> 
 </form>   
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST['opcao']);
}
$token = bin2hex(random_bytes(32)); // 32 bytes = 64 caracteres
echo $token;


?>