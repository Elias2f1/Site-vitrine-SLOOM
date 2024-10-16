<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "contact@sloom.com"; // Adresse de réception des emails pour SLOOM
    $subject = "Message depuis le formulaire de contact SLOOM";
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $messageToSend = "Nom: $name\n";
    $messageToSend .= "Email: $email\n";
    $messageToSend .= "Message:\n$message";
    
    $headers = "From: $email";
    
    mail($to, $subject, $messageToSend, $headers);
}
?>
