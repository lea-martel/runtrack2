<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT AVG(capacite) FROM salles";
$query = mysqli_query($db, $requete);
$salles = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>capacite_salles</th>
<tbody>
    
<?php foreach ( $salles as $valeur) { ?>
    <tr>
        <td> <?php echo $valeur[0];?> </td>
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>