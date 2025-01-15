<?php
$fichero = "./archivos/ficheroPrueba";


$flujo = fopen($fichero, "wb+");

fwrite($flujo, "Esto esta dobre escribiendo los datos del archivo");

fclose($flujo);
