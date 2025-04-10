<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';
include_once("./banco/banco.php");
include_once("funcoes.php");
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $login = $_POST['login'];
} else {
    echo "E-mail não informado!";
    exit;
}
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Servidor SMTP do Gmail
    $mail->SMTPAuth = true;
    $mail->Username = $emailfrom; 
    $mail->Password = $senhafron;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Remetente e destinatário
    $mail->CharSet = 'UTF-8'; 
    $mail->Encoding = 'base64'; 
    $mail->setFrom($emailfrom, 'Projeto');
    $mail->addAddress($email, $login);

    // Conteúdo do e-mail
    $codigo = gerarSenha();
    $mail->isHTML(true);
    $mail->Subject = 'Código de Recuperação de Senha';
    $mail->Body = "
    <p style='font-size: 14px; font-weight: bold;'>Bem-vindo de volta à sua conta $login!</p>
    <p>Seu código de recuperação é: 
        <span style='font-size: 14px; font-weight: bold; color: red;'><b>$codigo</b></span>
    </p>
"; 
    $mail->AltBody = "Seu código de recuperação é: $codigo";

    // Enviar e-mail
    $mail->send();
    header('Location: CodigoAcesso.php');
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}

?>