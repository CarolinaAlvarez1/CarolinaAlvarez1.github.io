<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="page">
    <form method="POST" class="formLogin" action="Login.php">
        <h1>Código de verificação</h1>
        <p>Digite o código de verificação.</p>
        <div class="inputs-container">
            <input type="text" class="input-codigo" autofocus maxlength="1" oninput="moveFocus(this)" />
            <input type="text" class="input-codigo" maxlength="1" oninput="moveFocus(this)" />
            <input type="text" class="input-codigo" maxlength="1" oninput="moveFocus(this)" />
            <input type="text" class="input-codigo" maxlength="1" oninput="moveFocus(this)" />
            <span class="separator">-</span>
            <input type="text" class="input-codigo" maxlength="1" oninput="moveFocus(this)" />
            <input type="text" class="input-codigo" maxlength="1" oninput="moveFocus(this)" />
        </div>
        <input type="submit" value="Confirmar" class="btn" />
    </form>
</div>


    <script>
        function moveFocus(currentInput) {
            // Se o campo atual tiver um valor, move o foco para o próximo input
            if (currentInput.value.length >= currentInput.maxLength) {
                let nextInput = currentInput.nextElementSibling;
                // Pula para o próximo input, ignorando elementos que não sejam input
                while (nextInput && nextInput.tagName.toLowerCase() !== 'input') {
                    nextInput = nextInput.nextElementSibling;
                }
                if (nextInput) {
                    nextInput.focus();
                }
            }
        }
    </script>
</body>
</html>
