<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT * FROM etudiants WHERE prenom like 't%'";
$query = mysqli_query($db, $requete);
$etudiants = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>id</th>
    <th>prenom</th>
    <th>nom</th>
    <th>naissance</th>
    <th>sexe</th>
    <th>email</th>
<tbody>
    
<?php foreach ( $etudiants as $etudiant) { ?>
    <tr>
        <td> <?php echo $etudiant[0];?> </td>
        <td> <?php echo $etudiant[1];?> </td>
        <td> <?php echo $etudiant[2];?> </td>
        <td> <?php echo $etudiant[3];?> </td>
        <td> <?php echo $etudiant[4];?> </td>
        <td> <?php echo $etudiant[5];?> </td>    
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>