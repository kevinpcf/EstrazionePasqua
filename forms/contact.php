<?php
    // Check for empty fields
    if(empty($_POST['nome'])      ||
        empty($_POST['cognome'])     ||
        empty($_POST['email'])     ||
        empty($_POST['cellulare'])   ||
        empty($_POST['biglietto'])   ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        echo "Non hai compilato tutti i campi";
        return false;
    }
    
    $nome = strip_tags(htmlspecialchars($_POST['nome']));
    $cognome = strip_tags(htmlspecialchars($_POST['cognome']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $cellulare = strip_tags(htmlspecialchars($_POST['cellulare']));
    $biglietto = strip_tags(htmlspecialchars($_POST['biglietto']));
    $subject = strip_tags(htmlspecialchars($_POST['subject']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    // Create the email and send the message
    $to = 'tommy.immediato@gmail.com';
    $email_subject = "Estrazione Pasqua DiiN 2022";
    $email_body = "Richiesto acquisto biglietto dal sito.\n\n"."*****************************************\n\n
    Nome: $nome\n Cognome: $cognome\n Numero del biglietto: $biglietto\n Email: $email\n Telefono: $cellulare \n\n*****************************************";
    $headers .= "Rispondi a: $email oppure $cellulare";   
    mail($to,$email_subject,$email_body,$headers);
    header('Location: ../index.html');
	exit;
?>