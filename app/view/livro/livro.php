<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Livro | Sistema de Biblioteca</title>
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
        .form-container { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); max-width: 900px; }
        .form-container h2 { margin-top: 0; color: #2c3e50; }
        .form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-size: 14px; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-size: 14px; }
        .form-group textarea { resize: vertical; min-height: 80px; }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus { outline: none; border-color: #4ca1af; }
        .actions { margin-top: 20px; display: flex; gap: 10px; }
        .actions button { padding: 10px 16px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; }
        .btn-save { background: #2c3e50; color: #fff; }
        .btn-save:hover { background: #1f2d3a; }
        .btn-cancel { background: #7f8c8d; color: #fff; }
        .btn-cancel:hover { background: #636e72; }
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
        <div class="form-container">
            <h2>Novo Livro</h2>
            <p>Cadastro de novo livro no acervo.</p>
            <form>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" placeholder="Digite o título do livro">
                    </div>
                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" placeholder="Digite o autor">
                    </div>
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" placeholder="Digite o ISBN">
                    </div>
                    <div class="form-group">
                        <label>Ano de Publicação</label>
                        <input type="number" placeholder="Ex: 2024">
                    </div>
                    <div class="form-group">
                        <label>Editora</label>
                        <input type="text" placeholder="Digite a editora">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select>
                            <option>Selecione</option>
                            <option>Literatura</option>
                            <option>Didático</option>
                            <option>Técnico</option>
                            <option>Infantil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" placeholder="Ex: 5">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select>
                            <option>Disponível</option>
                            <option>Indisponível</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea placeholder="Descrição do livro"></textarea>
                </div>
                <div class="actions">
                    <button type="submit" class="btn-save">Salvar Livro</button>
                    <button type="button" class="btn-cancel">Cancelar</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>
