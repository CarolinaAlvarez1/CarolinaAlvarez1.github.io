<?php
require_once 'vendor/autoload.php';  // Inclui o autoload do Composer

use Twilio\Rest\Client;  // Usando o namespace correto do Twilio

// Suas credenciais Twilio
$sid = 'SEU_SID_DA_CONTA';  // Substitua pelo SID da sua conta Twilio
$token = 'SEU_TOKEN_DE_AUTENTICACAO';  // Substitua pelo seu token de autenticação Twilio
$from = '+1XXXXXXXXXX';  // Seu número Twilio, incluindo o código do país
$to = '+55XXXXXXXXXX';  // Número do destinatário com o código do país (exemplo: Brasil +55)

// Criar uma instância do cliente Twilio
$client = new Client($sid, $token);

// Função para enviar o SMS
function enviarSMS($to, $from, $body) {
    global $client;

    try {
        $message = $client->messages->create(
            $to, // Número do destinatário
            [
                'from' => $from, // Número Twilio
                'body' => $body  // Mensagem SMS
            ]
        );
        echo "Mensagem enviada com sucesso! ID: " . $message->sid;
    } catch (Exception $e) {
        echo "Erro ao enviar SMS: " . $e->getMessage();
    }
}

// Exemplo de envio
$mensagem = 'Olá, seu código de verificação é: 123456';
enviarSMS($to, $from, $mensagem);
?>
