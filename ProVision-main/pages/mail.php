<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$recipient = "exemple@gmail.com";


echo'

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="container">
        <h1>Merci de nous avoir contacter ! Nous reviendrons vers vous le plus rapidement possible !</h1>
        <p class="back">Retourner à l accueil<br><a href="../index.php">Accueil</a>.</p>
        
    </div>
</body>
</html>



';


?>

