<?php
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Simulação
if ($usuario === 'admin' && $senha === '123') {
    header('Location: dashboard.php');
    exit;
} else {
    echo "Login inválido";
}