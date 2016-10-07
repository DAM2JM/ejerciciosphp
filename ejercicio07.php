<?php
    namespace Ejercicios;

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('Rectangulo.php');

    // Crear una instancia de la clase Rectangulo y usar los métodos disponibles.
    // La variedad de pruebas

    $rectangulo = new Rectangulo(4, 5);
?>

<h1>Base del rectangulo: <?=$rectangulo->getBase()?></h1>
<h1>Altura del rectangulo: <?=$rectangulo->getAltura()?></h1>
<hr/>
<h2>Superficie del rectangulo: <?=$rectangulo->superficie()?></h2>
<h2>Per&iacute;metro del rectangulo: <?=$rectangulo->perimetro()?></h2>
