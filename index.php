<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistema de Biblioteca</title>
    <style>
        /* ... Seus estilos anteriores ... */
        * { box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }
        .login-container {
            background: linear-gradient(135deg, #0f582a, #50b172);
            width: 100%;
            max-width: 380px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .text-center { 
            text-align: center; 
        }

        .login-icon {
            margin-bottom: 15px;
        }

        .login-container h1 { text-align: center; margin: 0 0 10px 0; color: #2c3e50; }
        .login-container p { text-align: center; margin-bottom: 25px; color: #666; font-size: 14px; }
        
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-size: 14px; color: white; }
        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .form-group input:focus { outline: none; border-color: #4ca1af; }
        .btn-login {
            width: 100%;
            padding: 12px;
            background:linear-gradient(135deg, #000703, #15803d);;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-login:hover { background: #0f1116; }
        .footer-links { margin-top: 20px; text-align: center; font-size: 13px; }
        .footer-links a{ color: white; text-decoration: none; margin: 0 5px; }
        .footer-links a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-container">
        
        <div class="text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" 
                 width="100px" 
                 class="login-icon" 
                 alt="Logo Biblioteca">
        </div>

        <h1>Biblioteca</h1>
        <p style="color: #def2f5;">Acesso ao sistema</p>
        
        <form action="dashboard.php" method="POST">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            
            <button type="submit" class="btn-login">Entrar</button>
        </form>

        <div class="footer-links">
            <a href="alterar_senha.php">Esqueci minha senha</a> |
            <a href="#">Suporte</a>
        </div>
    </div>
</body>
</html>