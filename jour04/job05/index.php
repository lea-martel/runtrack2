<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">

        Identifiant : <input type="text" name="name" placeholder="Entrer votre identifiant">
        <br />

        Mot de passe : <input type="password" name="password" placeholder="Entrer votre mot de passe">
        <br />

        <button type="submit"> Entrer </button>
    </form>
</body>

</html>

<?php
$identifiant = "john";
$motdepasse = "rambo";

if (!empty($_POST)) {

    if ($_POST["password"] == $motdepasse && $_POST["name"] == $identifiant) {

        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>