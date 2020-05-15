<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT nom, capacite FROM salles";
$query = mysqli_query($db, $requete);
$salles = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>nom</th>
    <th>capacite</th>
<tbody>
    
<?php foreach ( $salles as $salle) { ?>
    <tr>
        <td> <?php echo $salle[0];?> </td>
        <td> <?php echo $salle[1];?> </td> 
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>