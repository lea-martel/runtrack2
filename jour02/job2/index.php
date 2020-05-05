<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-JOB2</title>
</head>
<body>
    
    <?php
    $nombre = 0;
    $nombre1 = 1337;

    while ($nombre1 >= $nombre) {
        
        echo "<div>";
        if ($nombre == 42) 
    {
        echo $nombre;
        echo "<br />";
    
    } 
    
    elseif ($nombre == 26 || $nombre == 37 || $nombre == 88 || $nombre == 1111) {
        echo null;
    
    } 
    
    else {
        echo $nombre;
    }
    echo "</div>";
    $nombre++;
}
?>
</body>
</html>