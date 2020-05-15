<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT id FROM etudiants";
$query = mysqli_query($db, $requete);
$etudiants = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>nb_etudiants</th>
<tbody>
    
<?php foreach ( $etudiants as $etudiant) { ?>
    <tr>
        <td> <?php echo $etudiant[0];?> </td> 
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>