<?php
function multiplication($val_depart){

    echo "<strong> table de $val_depart.<br></strong>";
    for($multiple = 1; $multiple <11; $multiple++){
        $resultat = $val_depart * $multiple;
        echo "<em> $val_depart x $multiple = $resultat <br> ";
    }
}

for ($val_depart = 1; $val_depart < 11; $val_depart++){
    multiplication($val_depart);
    echo"</br>";
}
