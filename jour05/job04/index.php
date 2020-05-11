<?php

/* Version switch */

function calcule ($a, $operation, $b) {

    switch ($operation) {
        case "+":
            return ($a + $b);
       break;

        case "*":
            return ($a + $b);
        break;

        case "-":
            return ($a - $b);
        break;
    
    }
}

echo calcule(3,"+",7);

?>

<?php 

/*Version if */

function calcules ($a, $operation, $b) {

    if ($operation = "-") {
        return $a - $b;
    }

    elseif ($operation = "*") {
        return $a * $b;
    }

    elseif ($operation = "+") {
        return $a + $b;
    }
    
    return;
}

calcules(8,"-",5);
echo calcules(8, "-",5);

?>