<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações | Sistema de Biblioteca</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            margin: 0;
            background: #f4f6f8;
            color: #333;
        }
        header {
            background: #2c3e50;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            margin: 0;
            font-size: 20px;
        }
        header .user {
            font-size: 14px;
        }
        .container {
            display: flex;
            min-height: calc(100vh - 60px);
        }
        nav {
            width: 220px;
            background: #34495e;
            padding-top: 20px;
        }
        nav a {
            display: block;
            padding: 12px 20px;
            color: #ecf0f1;
            text-decoration: none;
            font-size: 14px;
        }
        nav a:hover,
        nav a.active {
            background: #2c3e50;
        }
        main {
            flex: 1;
            padding: 30px;
        }
        .section {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .section h3 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #4ca1af;
        }
        .actions {
            text-align: right;
        }
        .actions button {
            padding: 10px 16px;
            background: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .actions button:hover {
            background: #1f2d3a;
        }
    </style>
</head>
<body>

<header>
    <h1>Sistema de Biblioteca</h1>
    <div class="user">Usuário logado</div>
</header>

<div class="container">
    <nav>
        <a href="#">🏠 Início</a>
        <a href="#">📚 Acervo</a>
        <a href="#">📖 Empréstimos</a>
        <a href="#">👤 Usuários</a>
        <a href="#" class="active">⚙️ Configurações</a>
        <a href="#">🚪 Sair</a>
    </nav>

    <main>
        <h2>Configurações do Sistema</h2>
        <p>Gerencie as configurações gerais da biblioteca.</p>

        <div class="section">
            <h3>Dados da Biblioteca</h3>
            <div class="form-group">
                <label>Nome da Biblioteca</label>
                <input type="text" placeholder="Biblioteca Municipal">
            </div>
            <div class="form-group">
                <label>E-mail de Contato</label>
                <input type="email" placeholder="contato@biblioteca.com">
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" placeholder="(00) 0000-0000">
            </div>
        </div>

        <div class="section">
            <h3>Regras de Empréstimo</h3>
            <div class="form-group">
                <label>Dias máximos de empréstimo</label>
                <input type="number" placeholder="7">
            </div>
            <div class="form-group">
                <label>Quantidade máxima de livros por usuário</label>
                <input type="number" placeholder="3">
            </div>
            <div class="form-group">
                <label>Multa diária por atraso (R$)</label>
                <input type="text" placeholder="1,50">
            </div>
        </div>

        <div class="section">
            <h3>Segurança</h3>
            <div class="form-group">
                <label>Tempo de expiração da sessão (minutos)</label>
                <input type="number" placeholder="30">
            </div>
            <div class="form-group">
                <label>Bloquear usuário após tentativas inválidas</label>
                <select>
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>
        </div>

        <div class="actions">
            <button>Salvar Configurações</button>
        </div>
    </main>
</div>

</body>
</html>
