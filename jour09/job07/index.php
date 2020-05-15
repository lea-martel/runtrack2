<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT SUM(superficie) FROM etage";
$query = mysqli_query($db, $requete);
$etage = mysqli_fetch_all($query);

?>

<table>
    <thead>
    <th>superficie_totale</th>
<tbody>
    
<?php foreach ( $etage as $valeur) { ?>
    <tr>
        <td> <?php echo $valeur[0];?> </td> 
    </tr>
        <?php } ?>
    </tbody>
  </thead>
</table>