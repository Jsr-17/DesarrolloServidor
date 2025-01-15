<?php
$fichero = "./archivos/ficheroPrueba";


//r nos proporciona la posibilidad de lectura  y escritura desde un inicio
$prueba1 = fopen($fichero, "rb+");
//a+ nos permite escritura y lectira desde el final del archivo
$prueba2 = fopen($fichero, "ab+");
//r nos permite la lectura desde el inicio 
$prueba3 = fopen($fichero, "rb");

