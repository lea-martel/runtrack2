<?php
function bonjour ($i = "jour") {

if ($i == true) {

    echo "Bonjour <br />";
}

else {

    echo "Bonsoir <br />";
}
}

bonjour ($i= true);
bonjour ($i= false);
?>