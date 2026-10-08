<?php
/*Ejemplo if anidado

//la calificacion sera:
    -suspenso
    -suficiente
    -bien
    -notable
    -sobresaliente
    */

    $nota = 7;

    if ($nota < 5){
        echo "Suspenso";
    } else if  ($nota < 6){
        echo "Suficiente";
    }elseif($nota < 7){
        echo "Bien";
    }elseif($nota < 9 ){
        echo  "notable";
    } else  
        echo "Sobresaliente";