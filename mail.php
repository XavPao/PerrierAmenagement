<?php 
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];
$formContent="De: $name \n Numéro : $phoneNumber \n Depuis : $emailAddress \n Message : $message ";
$recipient = "xavier.paolucci@gmail.com";
$subject = "Tu as un message sur le site";
$mailHeader = "From: $emailAddress \r\n";
// $mailHeader = "From: $emailAddress \r\n";
mail($recipient, $subject, $formContent, $mailHeader) or die("Error!");
header("Location: http://perrier-amenagement.fr");
?>