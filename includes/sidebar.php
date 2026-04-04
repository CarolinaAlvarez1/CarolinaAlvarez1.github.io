<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>

    <!-- Bootstrap 5 & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        *{
            box-sizing: border-box;
        }
        :root {
            --sidebar-width: 190px;
            --primary-green: #0f582a;
            --secondary-green: #50b172;
            --gradient-main: linear-gradient(135deg, #0f582a, #50b172);
        }

        body {
            background: #f4f6f8;
            font-family: 'Inter', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

        /* HEADER */
        header {
            background: var(--gradient-main);
            color: #fff;
            padding: 0 20px;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 1050;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .toggle-btn {
            font-size: 22px;
            cursor: pointer;
            display: none;
            background: none;
            border: none;
            color: white;
            margin-right: 10px;
        }

        /* USER INFO & DROPDOWN HOVER */
        .user-dropdown .dropdown-menu {
            display: none;
            margin-top: 0;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            animation: fadeIn 0.3s ease;
        }

        @media (min-width: 992px) {
            .user-dropdown:hover .dropdown-menu {
                display: block;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* WRAPPER & SIDEBAR */
        .wrapper {
            display: flex;
             padding-top: 60px; 
        }

        nav.sidebar {
            width: var(--sidebar-width);
            background: var(--gradient-main);
            height: calc(100vh - 60px);
            position: fixed;
            left: 0;
            padding-top: 20px;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        nav.sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: 0.3s;
        }

        nav.sidebar a:hover, nav.sidebar a.active {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            border-left: 4px solid #fff;
        }

        /* CONTENT */
        main.content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 30px;
            transition: all 0.3s ease;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 991px) {
            .toggle-btn { display: block; }
            nav.sidebar { left: calc(-1 * var(--sidebar-width)); }
            nav.sidebar.active { left: 0; }
            main.content { margin-left: 0; }
            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,0.4);
                z-index: 999;
                margin-top: 60px;
            }
            .sidebar-overlay.show { display: block; }
        }
    </style>
</head>

<body>

    <header>
        <div class="d-flex align-items-center">
            <span class="fs-4 me-2">📚</span>
        </div>

        <div class="dropdown user-dropdown">
            <div class="d-flex align-items-center text-white" style="cursor: pointer;">
                <div class="text-end me-2 d-none d-sm-block">
                    <small class="text-white-50 d-block" style="font-size: 10px;">Logado como:</small>
                    <strong style="font-size: 14px;"><?php echo $_SESSION['usuario_nome'] ?? 'Admin'; ?></strong>
                </div>
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                    <i class="fas fa-user text-success"></i>
                </div>
            </div>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><a class="dropdown-item py-2" href="#"><i class="fas fa-id-card me-2"></i> Perfil</a></li>
                <li><a class="dropdown-item py-2" href="#"><i class="fas fa-cog me-2"></i> Ajustes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item py-2 text-danger" href="logout.php"><i class="fas fa-power-off me-2"></i> Sair</a></li>
            </ul>
        </div>
    </header>

    <div class="sidebar-overlay" id="overlay" onclick="toggleSidebar()"></div>

    <div class="wrapper">
        <nav class="sidebar" id="sidebar">
            <a href="dashboard.php" title = "Início" class="<?php echo ($pagina_atual == 'dashboard.php') ? 'active' : ''; ?>">
                <i class="fas fa-chart-line me-3"></i> Início
            </a>
            <a href="esteira_livros.php" title = "Editar Cadastro" class="<?php echo ($pagina_atual == 'esteira_livros.php') ? 'active' : ''; ?>">
                <i class="fa-thin fa-pen-to-square me-3"></i> Editar Cadastro
            </a>
            <a href="esteira_livros.php" title = "Acervo" class="<?php echo ($pagina_atual == 'esteira_livros.php') ? 'active' : ''; ?>">
                <i class="fa
                s fa-book me-3"></i> Acervo
            </a>
            <a href="usuarios.php" title="Usuários" class="<?php echo ($pagina_atual == 'usuarios.php') ? 'active' : ''; ?>">
                <i class="fas fa-users me-3"></i> Usuários
            </a>
        </nav>

       <main class="content">
</body>
</html>