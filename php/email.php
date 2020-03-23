<?php

if(isset($_POST['email']) && !empty($_POST['email']))
$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$service = addcslashes($_POST['service']);
$mensagem = addcslashes($_POST['subject']);

$to = "lourencoandre80@gmail.com";
$subject = "Contato - Página Pessoal"
$body = "Nome: ".$nome."\r\n"."Email: ".$email."\r\n"."Serviço: ".$service."\r\n"."$Mensagem: ".$mensagem;

$header = "From:androurenco@gmail.com"."\r\n"."Reply-To:".$email."\e\n"."X=Mailer:PHP".phpversion();

if(mail($to, $subject, $body, $header)){
    echo("email enviado com sucesso")
    echo($to, $subject, $body, $header)
}else{
    echo("email não enviado")
    echo($to, $subject, $body, $header)
}

?>
