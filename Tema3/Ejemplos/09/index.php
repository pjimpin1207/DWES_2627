<?php

function sumar_uno($x) {
$x++;
return $x;
}
$a = 2;
echo sumar_uno($a); // 3
echo $a;


// registro de referencias
function sumar_dos($x) {
    $x = $x + 2;
}
$a = 2;
echo sumar_dos($a); // 4
echo $a; //4 la variable original se modifica