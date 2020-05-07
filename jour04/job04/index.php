<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-JOB04</title>
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

if (isset($_POST))

    echo "<table>
    <thead>
        <th>argument</th>
        <th>valeur</th>
    </thead>
        <tbody>
        <tr>
            <td>" . "$_POST[nom]" . "</td>
            <td>" . "$_POST[prenom]" . "</td>
        <tr>
        </tbody>
    </thead>
  </table>";
?>