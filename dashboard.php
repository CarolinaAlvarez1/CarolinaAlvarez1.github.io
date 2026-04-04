<?php 
require_once 'includes/sidebar.php'; 
$total_livros = 120; // Simulação
$emprestimos_ativos = 15; // Simulação
$usuarios_cadastrados = 45; // Simulação
?>

<style>
body {
  background: linear-gradient(135deg, #f0fdf4, #ecfdf5);
}
    .welcome-header {
        margin-bottom: 30px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        background: linear-gradient(135deg, #ffffff, #f1f5f9);
        border-left: 5px solid #22c55e;
    }
    .welcome-header h3{
        text-shadow: 1px 1px 4px rgba(0,0,0,0.1);
    }
    .stat-card {
        border: none;
        border-radius: 10px;
        transition: transform 0.2s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .stat-card:hover {
        transform: translateY(-5px);
    }
    .icon-box {
        font-size: 2.5rem;
        opacity: 0.3;
        position: absolute;
        right: 15px;
        top: 15px;
    }
   .card-dashboard {
  border-radius: 16px;
  padding: 20px;
  color: #fff;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
backdrop-filter: blur(10px);
  background: linear-gradient(135deg, rgba(59,130,246,0.9), rgba(37,99,235,0.9));
}

/* Gradientes mais bonitos */
.card-blue {
  background: linear-gradient(135deg, #3b82f6, #2563eb);
}

.card-green {
  background: linear-gradient(135deg, #22c55e, #15803d);
}

.card-yellow {
  background: linear-gradient(135deg, #facc15, #eab308);
}

.card-red {
  background: linear-gradient(135deg, #ef4444, #dc2626);
}

/* Hover */
.card-dashboard:hover {
   transform: translateY(-8px) scale(1.02);
  box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}


/* Botões */
.btn-blue {
  background: linear-gradient(135deg, #0742a8, #2563eb);
  color: #fff;
}

.btn-green {
  background: linear-gradient(135deg, #023d18, #15803d);
  color: #fff;
}

.btn-gray {
   /* background: linear-gradient(135deg, #ecf02a, #f1d565); */
   background: linear-gradient(135deg, #eb8143cb, #d47f45);
  color:  #fff;
}

.btn-modern {
  letter-spacing: 0.5px;
  position: relative;
  overflow: hidden;
}

.btn-modern::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: -100%;
  background: rgba(255,255,255,0.2);
  transition: 0.4s;
}

.btn-modern:hover::after {
  left: 100%;
}
</style>

<div class="welcome-header">
    <h3 class="mb-1">Bem-vindo</h3>
    <p class="text-muted mb-0">Hoje é sabado, 04 de abril de 2026. Veja o resumo do acervo abaixo.</p>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card stat-card card-blue card-dashboard text-white p-3 h-100">
            <div class="card-body">
                <h6 class="card-title">Total de Livros</h6>
                <h2 class="display-6 fw-bold"><?php echo $total_livros; ?></h2>
                <div class="icon-box"></div>
                <a href="acervo.php" class="text-white-50 text-decoration-none small">Ver acervo completo →</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card card-dashboard card-green text-white p-3 h-100">
            <div class="card-body">
                <h6 class="card-title">Empréstimos Ativos</h6>
                <h2 class="display-6 fw-bold"><?php echo $emprestimos_ativos; ?></h2>
                <div class="icon-box">📖</div>
                <a href="emprestimos.php" class="text-white-50 text-decoration-none small">Gerenciar entregas →</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card card-yellow card-dashboard text-white p-3 h-100">
            <div class="card-body">
                <h6 class="card-title">Leitores Ativos</h6>
                <h2 class="display-6 fw-bold"><?php echo $usuarios_cadastrados; ?></h2>
                <div class="icon-box">👥</div>
                <a href="usuarios.php" class="text-white-50 text-decoration-none small">Ver cadastros →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card card-dashboard card-red text-white p-3 h-100">
            <div class="card-body">
                <h6 class="card-title">Cadastro</h6>
                <h2 class="display-6 fw-bold"><?php echo $usuarios_cadastrados; ?></h2>
                <div class="icon-box">👥</div>
                <a href="" class="text-white-50 text-decoration-none small">cadastrar no usuario →</a>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <h4>Ações Rápidas</h4>
    <hr>
    <div class="d-flex gap-3">
        <button class="btn btn-modern btn-green" onclick="location.href='esteira_livros.php'">➕ Cadastrar Livro</button>
        <button class="btn btn-modern btn-blue" onclick="location.href='novo_emprestimo.php'">📑 Novo Empréstimo</button>
        <button class="btn btn-modern btn-gray" onclick="window.print()">🖨️ Imprimir Relatório do Dia</button>
    </div>
</div>

<?php 
require_once 'includes/footer.php'; 
?>