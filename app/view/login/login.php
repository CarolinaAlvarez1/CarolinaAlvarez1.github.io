<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistema de Biblioteca</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
        }
        .login-container {
            background: #fff;
            width: 100%;
            max-width: 380px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        .login-container p {
            text-align: center;
            margin-bottom: 25px;
            color: #666;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #4ca1af;
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            background: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-login:hover {
            background: #1f2d3a;
        }
        .footer-links {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
        }
        .footer-links a {
            color: #4ca1af;
            text-decoration: none;
            margin: 0 5px;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Biblioteca</h1>
        <p>Acesso ao sistema</p>
        <form>
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn-login" data-action="login">Entrar</button>
        </form>
        <div class="footer-links">
            <a href="alterar_senha.php">Esqueci minha senha</a> |
            <a href="#">Suporte</a>
        </div>
    </div>
</body>
</html>
