<?php

session_start();

if (isset($_POST['prenom'])) {
    ($_SESSION['name'] .= $_POST['prenom']);
    echo $_POST['prenom'];
}

else $_SESSION['name'] .= $_POST['prenom'];

if (isset($_SESSION['name'])) {

}


?>

<form action="index.php" method="post">
Prenom : <input type="text" name="prenom" placeholder="Entrer votre prenom">
<br />
<input type="submit" value="Submit">
<input type="submit" name="reset" value="reset">

</form>