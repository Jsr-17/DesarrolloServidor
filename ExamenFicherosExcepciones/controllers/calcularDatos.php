<?php
include "../model/FormModelData.php";
ini_set("display_errors", 1);

$archivo = "../data/resultados.csv";

if (isset($_POST["asignatura"])) {
    try {
        $flujo = fopen($archivo, "r");
        $array = [];
        $arrayObjetos = [];

        while (($data = fgetcsv($flujo, 1000, ";")) !== FALSE) {
            $array = [...$array, $data];
        }
        fclose($flujo);

    } catch (\Throwable $th) {
        //throw $th;
    }

    for ($i = 1; $i < count($array); $i++) {
        $arrayObjetos[$i - 1] = $objeto = new
            FormModelData($array[$i][0], $array[$i][2], $array[$i][3], $array[$i][4], $array[$i][1]);
    }
    $notas = [];
    $notaBaja = 10000;
    $notaAlta = -5;
    $objetoBaja = (int) "";
    $objetoBaja = (int) "";


    foreach ($arrayObjetos as $key => $value) {
        $notas = [...$notas, $value->getNota()];

        if ($notaBaja < $value->getNota()) {
            $objetoBaja = $value;
        }
        if ($value->getNota() > $notaAlta) {
            $objetoAlta = $value;
        }
    }
    $total = 0;
    foreach ($notas as $key => $value) {
        $total += $value;
    }

    echo "Nota mas baja " . $objetoAlta->getNota() . " en la asignatura " . $objetoAlta->getAsignatura() . " del alumno " . $objetoAlta->getNombre();
    echo "<br>";
    //echo "Nota mas baja " . $objetoBaja->getNota() . " en la asignatura " . $objetoBaja->getAsignatura() . " del alumno " . $objetoBaja->getNombre();
    echo "<br>";
    echo "Nota promedio es: " . $total / count($notas);
}

