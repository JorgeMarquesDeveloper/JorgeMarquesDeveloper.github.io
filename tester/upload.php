<?php
require 'Twilio/autoload.php'; // Carregue a biblioteca Twilio

use Twilio\Rest\Client;

// Credenciais da sua conta Twilio
$accountSid = 'ACed74e3439e9c502e42cd32ebffcb3b59';
$authToken = '5bf5a3650502db1b7f472b686cda0f68';
// Inicialize o cliente Twilio
$client = new Client($accountSid, $authToken);

// Número de telefone do destinatário (formato: +1234567890)
$recipientNumber = '+1234567890';

// Mensagem a ser enviada
$message = 'Olá! Esta é uma mensagem do Twilio.';

// Envie a mensagem
$message = $client->messages->create(
    $recipientNumber,
    [
        'from' => 'whatsapp:+5583999785222', // Seu número do WhatsApp Business
        'body' => $message
    ]
);

echo 'Mensagem enviada com sucesso!';
