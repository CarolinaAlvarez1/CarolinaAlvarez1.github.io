<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo de Livros | Biblioteca</title>
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
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px;
            flex-wrap: wrap;
        }
        .top-bar input {
            padding: 10px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .top-bar button {
            padding: 10px 15px;
            background: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .top-bar button:hover {
            background: #1f2d3a;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        table thead {
            background: #2c3e50;
            color: #fff;
        }
        table th,
        table td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }
        table tbody tr:nth-child(even) {
            background: #f2f2f2;
        }
        table tbody tr:hover {
            background: #e6eef2;
        }
        .status {
            padding: 5px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: #fff;
            display: inline-block;
        }
        .disponivel {
            background: #27ae60;
        }
        .emprestado {
            background: #e67e22;
        }
        .acoes button {
            background: #4ca1af;
            border: none;
            color: #fff;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }
        .acoes button:hover {
            background: #3b8c99;
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
        <a href="#" class="active">📚 Acervo</a>
        <a href="#">📖 Empréstimos</a>
        <a href="#">👤 Usuários</a>
        <a href="#">⚙️ Configurações</a>
        <a href="#">🚪 Sair</a>
    </nav>

    <main>
        <h2>Acervo de Livros</h2>
        <p>Consulta e gerenciamento do acervo da biblioteca.</p>

        <div class="top-bar">
            <input type="text" placeholder="Pesquisar por título, autor ou ISBN">
            <button>➕ Novo Livro</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Ano</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dom Casmurro</td>
                    <td>Machado de Assis</td>
                    <td>9788535914849</td>
                    <td>1899</td>
                    <td><span class="status disponivel">Disponível</span></td>
                    <td class="acoes"><button>Detalhes</button></td>
                </tr>
                <tr>
                    <td>O Pequeno Príncipe</td>
                    <td>Antoine de Saint-Exupéry</td>
                    <td>9788595081512</td>
                    <td>1943</td>
                    <td><span class="status emprestado">Emprestado</span></td>
                    <td class="acoes"><button>Detalhes</button></td>
                </tr>
                <tr>
                    <td>1984</td>
                    <td>George Orwell</td>
                    <td>9780451524935</td>
                    <td>1949</td>
                    <td><span class="status disponivel">Disponível</span></td>
                    <td class="acoes"><button>Detalhes</button></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>

</body>
</html>