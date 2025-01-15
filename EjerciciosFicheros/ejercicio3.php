<?php
/*
//Parte a del ejercicio 3 

//Archivo con ruta relativa 
$archivo = "./archivos/ficheroPrueba";

//abro un flujo de datos con el archivo con modo escritura y lectura desde el inicio
$flujo = fopen($archivo, "rb+");

print (
    "<p>Primera Parte Del Ejercicio!!!!!</p>"
);

//La funcion feof me permite recorrer el documento desde inicio hasta el final , se encarga de indicar si es el final o no del documento

while (!feof($flujo)) {
    //Con la funcion fgetc recorro cada uno de los caracteres y los imprimo junto a un salto de linea
    $caracter = fgetc($flujo);
    print "<br>" . $caracter;
}

//Cierro el flujo de datos
fclose($flujo);

//Vuelvo a abrir un flujo de datos con la misma filosofia que anteriormente
$flujo = fopen($archivo, "rb+");


while (!feof($flujo)) {
    //En esta caso al necesitar sacar cada linea utilizo la funcion fgets

    $frase = fgets($flujo);
    print "<br>" . $frase;
}

fclose($flujo);*/


print (
    "<p>Segunda Parte Del Ejercicio!!!!!</p>"
);


$archivo = "./archivos/Libro1.csv";

$flujo = fopen($archivo, "rb+");

print ("<table>");
$datos = fgetcsv($flujo, 1000, ",");

$data = explode(";", $datos[0]);

print ("<table>");
print ("<thead>");

foreach ($data as $dato) {
    print ("<td>" . htmlspecialchars($dato) . "</td>");
}
print ("</thead>");

print ("<tbody>");
while (($datos = fgetcsv($flujo, 1000, ";")) !== FALSE) {
    print ("<tr>");
    foreach ($datos as $dato) {
        print ("<td>" . htmlspecialchars($dato) . "</td>");
    }
    print ("</tr>");
}
print ("</tbody>");


