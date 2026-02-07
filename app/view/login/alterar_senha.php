<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Minha Senha | Biblioteca</title>
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
        .container {
            background: #fff;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .container h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        .container p {
            text-align: center;
            margin-bottom: 25px;
            color: #666;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 20px;
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
        .btn {
            width: 100%;
            padding: 12px;
            background: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background: #1f2d3a;
        }
        .links {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
        }
        .links a {
            color: #4ca1af;
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .info {
            background: #f2f6f8;
            border-left: 4px solid #4ca1af;
            padding: 10px;
            font-size: 13px;
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biblioteca</h1>
        <p>Recuperação de senha</p>

        <div class="info">
            Informe seu e-mail cadastrado. Você receberá um link para redefinir sua senha.
        </div>

        <form>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
            </div>

            <button type="submit" class="btn">Enviar link de recuperação</button>
        </form>

        <div class="links">
            <a href="login.html">Voltar para o login</a>
        </div>
    </div>
</body>
</html>