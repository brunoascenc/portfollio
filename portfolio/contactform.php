<?php

$name = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$subject = addcslashes($_POST['subject'])
$message = addcslashes($_POST['message'])

$emailTo = "brunoascenc1@outlook.com";
$subjectMsg = "".$subject
$body = "Nome: ".$name. "\n"
        "Email: ".$email."\n"
        "Subject: ".$subject."\n"
        "Mensagem:".$message;
$header = "From: ".$email."\r\n"
          ."X=Mailer:PHP/".phpversion();
if (mail($emailTo, $subjectMsg, $body, $header)){
    echo("td certo")
}else {
    echo("erro")
}

?>