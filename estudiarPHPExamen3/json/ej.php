<?php
$datos = [
    'nombre' => 'Juan',
    'edad' => 25,
    'lenguajes' => ['PHP', 'JavaScript', 'Python']
];

$json = json_encode($datos);
echo $json;
echo "<br>";
$phpArray = json_decode($json, true);
print_r($phpArray);
