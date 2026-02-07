<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários | Sistema de Biblioteca</title>
    <style>
        * { box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
        body { margin: 0; background: #f4f6f8; color: #333; }
        header { background: #2c3e50; color: #fff; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        header h1 { margin: 0; font-size: 20px; }
        header .user { font-size: 14px; }
        .container { display: flex; min-height: calc(100vh - 60px); }
        nav { width: 220px; background: #34495e; padding-top: 20px; }
        nav a { display: block; padding: 12px 20px; color: #ecf0f1; text-decoration: none; font-size: 14px; }
        nav a:hover, nav a.active { background: #2c3e50; }
        main { flex: 1; padding: 30px; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px; }
        .top-bar input { padding: 10px; width: 260px; border-radius: 5px; border: 1px solid #ccc; }
        .top-bar button { padding: 10px 15px; background: #2c3e50; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; }
        .top-bar button:hover { background: #1f2d3a; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        thead { background: #2c3e50; color: #fff; }
        th, td { padding: 12px; font-size: 14px; text-align: left; }
        tbody tr:nth-child(even) { background: #f2f2f2; }
        tbody tr:hover { background: #e6eef2; }
        .status { padding: 5px 8px; border-radius: 4px; font-size: 12px; color: #fff; }
        .ativo { background: #27ae60; }
        .bloqueado { background: #c0392b; }
        .acoes button { background: #4ca1af; border: none; color: #fff; padding: 6px 10px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-right: 5px; }
        .acoes button:hover { background: #3b8c99; }
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
        <a href="#" class="active">👤 Usuários</a>
        <a href="#">⚙️ Configurações</a>
        <a href="#">🚪 Sair</a>
    </nav>
    <main>
        <h2>Usuários</h2>
        <p>Gerenciamento de usuários do sistema.</p>
        <div class="top-bar">
            <input type="text" placeholder="Pesquisar por nome, e-mail ou CPF">
            <button>➕ Novo Usuário</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Perfil</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maria Silva</td>
                    <td>maria@biblioteca.com</td>
                    <td>Administrador</td>
                    <td><span class="status ativo">Ativo</span></td>
                    <td class="acoes">
                        <button>Editar</button>
                        <button>Bloquear</button>
                    </td>
                </tr>
                <tr>
                    <td>João Santos</td>
                    <td>joao@email.com</td>
                    <td>Usuário</td>
                    <td><span class="status bloqueado">Bloqueado</span></td>
                    <td class="acoes">
                        <button>Editar</button>
                        <button>Ativar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
</body>
</html>