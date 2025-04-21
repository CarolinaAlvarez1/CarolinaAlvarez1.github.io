<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Acessando as variáveis
$host = $_ENV['DB_HOST'];
$usuario = $_ENV['DB_USERNAME'];
$senha = $_ENV['DB_PASSWORD'];
$banco = $_ENV['DB_DATABASE'];
$porta = $_ENV['DB_PORT'];

$conn = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
echo "Conectado com sucesso!";

session_start();
$sql = "SELECT * FROM usuarios";
$stmt = $conn->prepare($sql);
var_dump($stmt['CPF']);
exit();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!isset($dados['g-recaptcha-response']) || empty($dados['g-recaptcha-response'])) {
        die("Erro: reCAPTCHA não preenchido.");
    }
    
    $secretKey = "6LdudxErAAAAAHyHUomIVaq4gxU93x2_GfWawKkK";
    $token = $dados['g-recaptcha-response'];
    $remoteIp = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$token&remoteip=$remoteIp";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);          
    $resultado = json_decode($response, true);
    if (!$resultado['success']) {
        die("Erro: Falha na verificação do reCAPTCHA.");
    }
    if ($resultado['score'] < 0.5) {
        die("Erro: A validação automática identificou comportamento suspeito.");
    }
    if (!empty($_POST['login']) && !empty($_POST['senha'])) {
        $login = trim(htmlspecialchars($_POST['login']));
        $_SESSION['login'] = $login;
        header("Location: ValidaLogin.php");
        exit(); 
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LdudxErAAAAAKTnRorfdG5vp4zJuHqeSdbjrYEi"></script>

<script>
function gerarTokenReCaptcha(callback) {
    grecaptcha.ready(function() {
        var sitekey = document.getElementById('sitekey').value;
        grecaptcha.execute(sitekey, { action: 'submit' }).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
            callback();
        });
    });
}

function validaLogin(event) {
    event.preventDefault();
    
    if (document.frm.login.value.trim() === '') {
        alert("Digite o nome do usuário!");
        document.frm.login.focus();
        return false;
    }

    if (document.frm.senha.value.trim() === '') {
        alert("Digite a senha!");
        document.frm.senha.focus();
        return false;
    }
    
    gerarTokenReCaptcha(function() {
        document.frm.submit();
    });

    return false;
}
</script>
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin" onsubmit="return validaLogin(event);" name="frm" id="formulario">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">Usuario</label>
            <input type="text" placeholder="Digite seu usuario" autofocus="true" name="login" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" />
            <a href="redefinicaosenha.php">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
            <input type="hidden" id="sitekey" name="sitekey" class="sitekey" value="6LdudxErAAAAAKTnRorfdG5vp4zJuHqeSdbjrYEi">
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        </form>
    </div>
    
</body>
</html>
