<?php

// get input values
$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$ano = $_POST["ano"];
$mensagem = $_POST["mensagem"];
 
$toEmail = "contato@builders.com.br";
$subject = "Ensino Fundamental II - $nome";
 
// email body text
$body = '';
$body .= "Nome: ";
$body .= $nome;
$body .= "\n";
 
$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Celular: ";
$body .= $celular;
$body .= "\n";

$body .= "Ano: ";
$body .= $ano;
$body .= "\n";

$body .= "Mensagem: ";
$body .= $mensagem;
$body .= "\n";
 
// send email
$success = mail($toEmail, $subject, $body, "From: ".$email);
if ($success){
    print '<div class="alert alert-success">Mensagem enviada com sucesso!</div>';
} else {
    print '<div class="alert alert-danger">Tivemos um problema em enviar sua mensagem, tente novamente.</div>';
}

?>