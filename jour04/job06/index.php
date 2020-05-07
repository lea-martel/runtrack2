<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-JOB06</title>
</head>
<body>
    <form action="index.php" method="get">

        Nombre : <input type="text" name="name" placeholder="Entrer le nombre">
        <br />

        <button type="submit"> Entrer </button>
    </form>
</body>
</html>

<?php

if ($_GET) {
    
if($_GET ['name'] %2 ===0) {
    
    echo "Nombre pair"; 
}
else 
{  
    echo "Nombre impair";
}
}
?>