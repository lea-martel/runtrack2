<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT salles.nom, etage.nom FROM salles, etage WHERE salles.id_etage = etage.id";
$query = mysqli_query($db, $requete);
$etage = mysqli_fetch_all($query);
$salles = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>nom_salles</th>
    <th>nom_etages</th>
<tbody>
    
<?php foreach ( $etage as $salles => $valeur) { ?>
    <tr>
        <td> <?php echo $valeur[0];?> </td>
        <td> <?php echo $valeur[1];?> </td> 
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>