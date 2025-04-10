<?php
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
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin"  action="EnvioEmail.php">
            <h1>Redefinição de Senha</h1>
            <p>Digite os seus dados de acesso nos campos abaixo.</p>
            <label for="email">Usuário</label>
            <input type="text" placeholder="Digite seu usuário" autofocus="true" name="login" />
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" name="email" />
            <label for="password">Senha Nova</label>
            <input type="password" placeholder="Digite a senha nova" name="password" />
            <label for="password">Confirmar Senha</label>
            <input type="password" placeholder="Digite a senha nova" name="password2" />
            <input type="submit" value="Redefinir Senha" class="btnRedefinir" />
            <input type="button" value="Voltar" class="btnVoltar" onclick="window.location.href='Login.php';" />
        </form>
    </div>
    
</body>
</html>
