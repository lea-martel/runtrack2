<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-JOB03</title>
</head>
<body>
    <form action="index.php" method="post">

        Nom : <input type="text" name="nom" placeholder="Entrer votre nom">
        <br />

        Prenom : <input type="texte" name="prenom" placeholder="Entrer votre prenom">
        <br />

        Email : <input type="texte" name="email" placeholder="Email">
        <br />

        <button type="submit"> Entrer </button>
    </form>
</body>
</html>

<?php

(var_dump($_POST));

?>