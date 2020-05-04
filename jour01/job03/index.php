<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP-JOB03</title> 
</head>
<body>

<?php 
$var ="Hello LaPlateforme";
$var1 =true;
$var2 =10;
$var3 =5.6;
?>

<table>
   <tr>
   <td>Type<td>
   <td>Nom<td>
   <td>Valeur<td>
</tr>
   
   <tr>
   <td>Chaîne de caractère<td>
   <td>$var<td>
   <td><?=$var?> <td>
</tr>

<tr>
<td>Booléen<td>
<td>$var1<td>
<td><?=$var1?> <td>
</tr>

<tr>
<td>Entier<td>
<td>$var2<td>
<td><?=$var2?><td>
</tr>

<tr>
<td>Nombre à virgule<td>
<td>$var3<td>
<td><?=$var3?><td>
</tr>

<table>
</body>
</html>