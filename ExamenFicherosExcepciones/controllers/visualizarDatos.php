<?php

$archivo = "../data/resultados.csv";
ini_set("display_errors", 1);

try {
    $flujo = fopen($archivo, "r");
    $datos = [];

    while (($data = fgetcsv($flujo, 1000, ";")) !== FALSE) {
        $datos = [...$datos, $data];
    }
    fclose($flujo);
} catch (\Throwable $th) {
    throw $th;
}

print_r($datos);

print "<table>";
echo "<tr>";

for ($i = 0; $i < count($datos); $i++) {
    echo "<th>" . $datos[0][$i] . "<th>";
}


for ($i = 1; $i < count($datos); $i++) {
    echo "<tr>";

    foreach ($datos as $key => $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
    }

    echo "</td>";

}


print "</table>";