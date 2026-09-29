<?php

// convertir a entero
$var2= (int) $var;
$var =  null;

echo "El valor: $var2 de tipo " .getType($var2). "<br>";

// convertir a boolean
$var3 = (bool) $var;

echo "El valor: $var3 de tipo " .getType($var3). "<br>";

// convertir a  cadena
$var4 = (string) $var;
echo "El valor: $var4 de tipo " .getType($var4). "<br>";

// convertir a flotante
$var5 = (float) $var;
echo "El valor: $var5 de tipo " .getType($var5). "<br>";

?>