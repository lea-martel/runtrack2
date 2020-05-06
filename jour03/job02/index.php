<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$str_array = str_split ($str);

foreach ($str_array as $index => $valeur) {

if ($index % 2 !==1)
    echo $valeur;
}

?>