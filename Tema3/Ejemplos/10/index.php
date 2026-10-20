<?php

require 'lib/crearEtiquetas.php';

// Imprime un título de nivel 2 con las clases CSS tit-nav y text-center
$array['contenido'] = 'Titulo nivel 2';
$array['etiqueta'] = 'h2';
$array['clase'] = 'tit-nav text-center';
eti_html($array);