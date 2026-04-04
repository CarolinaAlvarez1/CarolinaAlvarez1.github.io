<?php 
require_once 'includes/sidebar.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Biblioteca - Gestão de Acervo</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .biblioteca-card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        .livro-row { cursor: pointer; transition: 0.3s; }
        .livro-row:hover { background-color: #fdf8f0 !important; }
        .timeline-audit { border-left: 2px solid #e0e0e0; padding-left: 15px; margin-top: 15px; }
        .timeline-item { font-size: 0.85rem; margin-bottom: 10px; position: relative; }
        .timeline-item::before { 
            content: ""; position: absolute; left: -21px; top: 5px; 
            width: 8px; height: 8px; background: #8b4513; border-radius: 50%; 
        }
    </style>
</head>
<body>

<div class="container biblioteca-card">
    <h2 class="mb-4">📚 Gestão de Acervo Literário</h2>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ISBN</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="livro-row" onclick="verDetalhesLivro('978-85-359-0277-1', 'A Metamorfose', 'Franz Kafka', 'Disponível', '1915')">
                <td>978-85-359-0277-1</td>
                <td><strong>A Metamorfose</strong></td>
                <td>Franz Kafka</td>
                <td><span class="badge bg-success">Disponível</span></td>
            </tr>
            <tr class="livro-row" onclick="verDetalhesLivro('978-85-723-2814-3', 'Orgulho e Preconceito', 'Jane Austen', 'Emprestado', '1813')">
                <td>978-85-723-2814-3</td>
                <td><strong>Orgulho e Preconceito</strong></td>
                <td>Jane Austen</td>
                <td><span class="badge bg-warning text-dark">Emprestado</span></td>
            </tr>
            <tr class="livro-row" onclick="verDetalhesLivro('978-85-723-2814-3', 'Uma dama fora dos padrões - os Rockbys 1', 'Julia Quinn', 'Emprestado', '1813')">
                <td>978-85-723-2814-3</td>
                <td><strong>Uma dama fora dos padrões - os Rockbys 1</strong></td>
                <td>Julia Quinn</td>
                <td><span class="badge bg-warning text-dark">Emprestado</span></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
function verDetalhesLivro(isbn, titulo, autor, status, ano) {
    Swal.fire({
        title: titulo,
        width: '700px',
        html: `
            <div class="text-start">
                <div class="row">
                    <div class="col-4">
                        <div style="background: #eee; height: 180px; display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                            <small class="text-muted">Capa do Livro</small>
                        </div>
                    </div>
                    <div class="col-8">
                        <p><strong>Autor:</strong> ${autor}</p>
                        <p><strong>ISBN:</strong> ${isbn}</p>
                        <p><strong>Ano de Publicação:</strong> ${ano}</p>
                        <p><strong>Status do Exemplar:</strong> <span class="badge ${status === 'Disponível' ? 'bg-success' : 'bg-warning text-dark'}">${status}</span></p>
                    </div>
                </div>
                
                <h6 class="mt-4 border-bottom pb-2">Histórico de Auditoria do Exemplar</h6>
                <div class="timeline-audit">
                    <div class="timeline-item">
                        <strong>Movimentação:</strong> ${status === 'Disponível' ? 'Devolução processada' : 'Empréstimo registrado'}<br>
                        <small class="text-muted">Realizado em 16/03/2026 às 14:00</small>
                    </div>
                    <div class="timeline-item">
                        <strong>Manutenção:</strong> Restauração da lombada concluída.<br>
                        <small class="text-muted">Em 10/02/2026</small>
                    </div>
                    <div class="timeline-item">
                        <strong>Aquisição:</strong> Livro tombado no acervo via doação.<br>
                        <small class="text-muted">Em 05/01/2026</small>
                    </div>
                </div>
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: '📥 Gerar Ficha Catalográfica (PDF)',
        cancelButtonText: 'Fechar',
        confirmButtonColor: '#8b4513'
    }).then((result) => {
        if (result.isConfirmed) {
            // Chamada ao PHP para gerar o PDF da ficha técnica do livro
            window.location.href = `gerar_ficha.php?isbn=${isbn}`;
        }
    });
}
</script>

</body>
</html>