<?php
$nombres = ["200", "204", "173", "98", "171", "404", "459"];

foreach ($nombres as $element) 
{   var_dump($element);

if ($element % 2 ===0) {
    echo $element. " est paire <br />";
}

else 
{
    echo $element. " est impair <br />";

}
}
?>