<?php
$num = (string) $_GET["numeros"];


$arr = str_split($num);
$e = 0;

$arrNum = [];
$arrPares = [];

$numeroLetra = "";

for ($i = 0; $i < count($arr); $i++) {



    if ($arr[$i + 1]) {
        if ($arr[$i + 1] == " ") {

            $numeroLetra .= $arr[$i];

            $arrNum = [...$arrNum, (int) $numeroLetra];
            $numeroLetra = "";

        }
    }
    if ($i == count($arr)) {
        $numeroLetra .= $arr[$i];

        $arrNum = [...$arrNum, (int) $numeroLetra];
    }



}



echo "Los numeros elegidos son: ";
foreach ($arrNum as $key) {
    echo $key . " ";
}

echo "<br>";




foreach ($arrNum as $key) {
    if ((int) $key % 2 == 0) {
        $arrPares = [...$arrPares, $key];
        $e++;

    }
}

echo "<br>";

echo "Los numeros pares  son: ";
for ($i = 0; $i < count($arrPares); $i++) {
    echo $arrPares[$i] . " ";
}


echo "La cantidad de numeros es: " . count($arrPares);

