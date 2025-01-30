<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<div class="container">
    <h1>Nous contacter</h1>
    <p>Contactez-nous et nous vous répondrons le plus rapidement possible !</p>
    <form action="mail.php" method="POST">
        <label for="name">Nom: </label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>
        <label for="subject">Objet: </label>
        <input type="text" name="subject" id="subject" required>
        <label for="message">Message</label>
        <textarea name="message" cols="30" rows="10" required></textarea>
        <input type="submit" value="Envoyer">
        <a href="../index.php"> <input type="button" value="Annuler"></a>
    </form>
</div>
</body>
</html>


