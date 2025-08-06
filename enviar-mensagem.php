<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$to = "rafael_paz85@hotmail.com"; //
$subject = "Nova mensagem de contato: $assunto";
$body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
echo "Mensagem enviada com sucesso!";
} else {
echo "Erro ao enviar a mensagem.";
}
}
?>