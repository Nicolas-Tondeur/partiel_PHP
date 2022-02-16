<?php
function somme($limite){
$somme = 0;
    for($i = 0; $i <= $limite; $i++){
        $somme += $i;
        
    }
    echo " La somme des $limite premiers entiers est $somme </br>";
}

somme(9);