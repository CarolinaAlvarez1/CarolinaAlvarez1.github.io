<?php
session_start();
// Verifica se as chaves existem na sessão antes de acessá-las
if (isset($_SESSION['login'], $_SESSION['password'])) {
    if ($_SESSION['login'] === 'teste' && $_SESSION['password'] === '12345') {
        header("Location: dashboard.html");
        exit();
    } else {
        echo "Login ou senha incorretos!";
        // Redireciona para a tela de login após 2 segundos
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'Login.php';
                }, 2000);
              </script>";
    }
} else {
    echo "Sessão não iniciada. Faça o login.";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'Login.php';
            }, 2000);
          </script>";
}
?>
