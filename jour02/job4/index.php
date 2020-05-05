<?php
$i = 0;
$multi3 = 3;
$multi5 =5;

while ($i <=100) {

    if ($i % $multi3 ===0 && $i % $multi5 ===0) {
        echo "FizzBuzz<br />";
        
    }
    
    elseif ($i % $multi3 ===0) {
        echo "Fizz<br />";
    
    }

    elseif ($i % $multi5 ===0) {
        echo "Buzz<br />";
    }
    
    else {
        echo "$i"."<br />";

    }
    
    $i++;
}
?>