<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início | Sistema de Biblioteca</title>
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
        nav a:hover {
            background: #2c3e50;
        }
        main {
            flex: 1;
            padding: 30px;
        }
        .welcome {
            margin-bottom: 30px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .card h3 {
            margin-top: 0;
            font-size: 16px;
            color: #2c3e50;
        }
        .card p {
            font-size: 14px;
            margin: 10px 0 0;
        }
        footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<header>
    <h1>Sistema de Biblioteca</h1>
    <div class="user">Bem-vindo, Usuário</div>
</header>

<div class="container">
    <nav>
        <a href="acervo.php">📚 Acervo</a>
        <a href="#">📖 Empréstimos</a>
        <a href="#">👤 Usuários</a>
        <a href="#">➕ Novo Livro</a>
        <a href="configuracoes.php">⚙️ Configurações</a>
        <a href="#">🚪 Sair</a>
    </nav>

    <main>
        <div class="welcome">
            <h2>Painel Inicial</h2>
            <p>Selecione uma opção no menu para começar.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Total de Livros</h3>
                <p>1.250 cadastrados</p>
            </div>
            <div class="card">
                <h3>Empréstimos Ativos</h3>
                <p>320 em andamento</p>
            </div>
            <div class="card">
                <h3>Usuários Ativos</h3>
                <p>540 cadastrados</p>
            </div>
            <div class="card">
                <h3>Atrasos</h3>
                <p>18 devoluções pendentes</p>
            </div>
        </div>
    </main>
</div>

<footer>
    © 2026 - Sistema de Biblioteca
</footer>

</body>
</html>
