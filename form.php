<?php
$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$number = addcslashes($_POST['phone']);
$message = addcslashes($_POST['message']);

$to = "izadeveloper22@gmail.com"
$subject = "I want to book an appointment - Soho Skin Lounge"

$body = "Name: ".$name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Message: ".$message;

$header = "From: fabiagabriela13@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body $header)){
    echo("Your request has been sent");
} else {
    echo("here was an error submitting your request.");
}


?>