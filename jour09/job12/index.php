<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT nom, prenom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-02' AND '2018-01-05'";
$query = mysqli_query($db, $requete);
$etudiants = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>nom</th>
    <th>prenom</th>
    <th>naissance</th>
<tbody>
    
<?php foreach ( $etudiants as $etudiant) { ?>
    <tr>
        <td> <?php echo $etudiant[0];?> </td>
        <td> <?php echo $etudiant[1];?> </td> 
        <td> <?php echo $etudiant[2];?> </td> 
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>