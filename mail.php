<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $sendmail = mail('ameesis.dakar@gmail.com', 'Demande de renseignements', $_POST['message'], $_POST['objet']);
    if ($sendmail)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>