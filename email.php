<?php

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "l.duarte.mk@gmail.com";
$subject = "qqr assunto";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Menssagem: ".$mensagem;    
$header = "From:contato@lucasweb.com"."\r\n".
            "Reply-To ".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header))
{
    echo("Sucesso");        
} else 
{
    echo("Erro");
}
?>