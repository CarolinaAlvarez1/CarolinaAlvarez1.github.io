<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Biblioteca</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #fff;
            width: 380px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #1e3c72;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #1e3c72;
            box-shadow: 0 0 5px #1e3c72;
        }

        .btn-login {
            width: 100%;
            background: #1e3c72;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #16305a;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2> Biblioteca Digital</h2>

    <form action="login.php" method="POST">
        <div class="input-group">
            <label>Usuário ou E-mail</label>
            <input type="text" name="usuario" placeholder="Digite seu usuário" required>
        </div>

        <div class="input-group">
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
        </div>

        <button class="btn-login" type="submit">Entrar</button>
    </form>

    <div class="footer-text">
        Sistema de Gestão de Biblioteca © 2026
    </div>
</div>

</body>
</html>
