<?php
if(!empty($_GET['codigo'])){
    $codido = $_GET['codigo'];
}
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (!empty($_POST['email'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
             echo 'Email invalido!';
        }
    }

}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin"  action="EnvioEmail.php">
            <h1>Ficha de cadastro</h1>
            <!-- <p>Digite os seus dados nos campos abaixo.</p> -->
            <label for="nome">Nome</label>
            <input type="text"  autofocus="true" name="nome" />
            <label for="endereço">Endereço</label>
            <input type="text"  autofocus="true" name="endereco" />
            <label for="bairro">Bairro</label>
            <input type="text"  autofocus="true" name="bairro" />
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" name="email" />
            <label for="datanascimento" >Data de Nascimento</label>
            <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
            <!-- <label for="estadocivil" class="text">Estado civil</label>
                    <select name="estadocivil" class="dropdown" required>
                        
                        <option selected disabled class="form_select_option" value="">Selecione</option>
                        <option value="Solteiro" class="form_select_option">Solteiro(a)</option>
                        <option value="Casado" class="form_select_option">Casado(a) </option>
                        <option value="Divorciado" class="form_select_option">Divorciado(a)</option>                    
                        <option value="Viúvo" class="form_select_option">Viúvo(a)</option>                    
                    
                    </select>  -->

            <input type="submit" value="Gravar" class="btn" onclick="window.location.href='entclientes.php';"/> 
            <!-- <input type="button" value="Voltar" class="btnVoltar" onclick="window.location.href='dashboard.html';" /> -->
        </form>
    </div>
    
</body>
</html>
