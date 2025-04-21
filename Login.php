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
echo "Conectado com sucesso!<br>";

session_start();

// Consulta de teste — exibe o CPF do primeiro usuário encontrado
$sql = "SELECT * FROM usuarios";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $linha = $result->fetch_assoc();
    echo "CPF do primeiro usuário: " . $linha['CPF'] . "<br>";
} else {
    echo "Nenhum usuário encontrado.<br>";
}

// A partir daqui continua seu código de validação do formulário
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
