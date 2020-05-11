<?php
$nombre = 1;
$nombre1 = 100;

while ($nombre <= $nombre1) {

    if ($nombre <= 20) {
        echo "<i> $nombre</i>"."<br />";
    
    } elseif ($nombre ==42) { 
        echo "LaPlateforme_<br />";

     }elseif ($nombre >= 25 && $nombre <= 50) {
    
        echo "<u> $nombre</u>"."<br />";
    } else {
        echo "$nombre <br />";
    }

$nombre++; 
}

?>