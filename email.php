<?php

if(isset$_POST['email']) && !empty($_POST['email']){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to ="raphael.burianek@mail.com";
$subjet = "Contato - formulario";
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Mensagem: ".$mensagem;
$header = "from: burianekraphael@gmail.com". "\r\n" 
            ."Reply-to: ".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();
if(mail($to,$subjet,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("O Email não pode ser enviado")";"
}


}

?>