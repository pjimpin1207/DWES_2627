<?php

// Obtener de datos
$v0 = (float) ($_POST['velocidad_inicial'] ?? 0);
$a  = (float) ($_POST['aceleracion'] ?? 0);
$t  = (float) ($_POST['tiempo'] ?? 0);
$m  = (float) ($_POST['masa'] ?? 0);


// formulas

$v = $v0 + ($a * $t);
$e = ($v0 * $t) + (0.5 * $a * ($t ** 2));
$f = $m * $a;
$ec = 0.5 * $m * ($v ** 2);

include 'views/view.resultado.php';