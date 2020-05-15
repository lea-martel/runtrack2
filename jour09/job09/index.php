<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT * FROM salles ORDER BY capacite DESC";
$query = mysqli_query($db, $requete);
$salles = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>id</th>
    <th>nom</th>
    <th>id_etage</th>
    <th>capacite</th>
<tbody>
    
<?php foreach ( $salles as $valeur) { ?>
    <tr>
        <td> <?php echo $valeur[0];?> </td>
        <td> <?php echo $valeur[1];?> </td> 
        <td> <?php echo $valeur[2];?> </td> 
        <td> <?php echo $valeur[3];?> </td>  
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>