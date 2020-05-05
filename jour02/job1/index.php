<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-JOB1</title>
</head>
<body>
    
    <?php
    $nombre = 0;
    $nombre1 = 1337;

    while ($nombre1 >= $nombre)
    {

        echo "<div>";
    if ($nombre == 42)
    {
        echo "<b><u>$nombre</b></u></br>";

    }
    else
    {
        echo $nombre;

    }
        echo "</div>";
    $nombre++;

}
    ?>

</body>
</html>