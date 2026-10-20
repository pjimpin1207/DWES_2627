<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


<?php

function eti_html($eti = []) {
 // Variables de trabajo para crear la etiqueta HTML
 $contenido = '';
 $etiqueta = 'p';
 $clase = '';
 // Si se reciben los argumentos esperados, se asigna su valor
 if (array_key_exists('contenido', $eti)) $contenido = $eti['contenido'];
 if (array_key_exists('etiqueta', $eti)) $etiqueta = $eti['etiqueta'];
 if (array_key_exists('clase', $eti)) $clase = 'class="' .
$eti['clase'] . '"';
 // Imprime la etiqueta HTML con su contenido y la clase CSS
 echo "<$etiqueta $clase>$contenido</$etiqueta>";
}