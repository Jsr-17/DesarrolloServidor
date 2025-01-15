<?php
header("Content-type: aplicattion/js");

//incluyo la libreria de js
include("js.js");

//un mensaje que estratado por php
$mensaje = "datos usando javascript y php";


//funcion de javascript guardada en una variable 
$datos = "funcion(" . '"' . $mensaje . '"' . ")";

//ejecucion del evento de js con datos desde php
echo 'caja.addEventListener("click", () =>' . $datos . ');';

echo 'caja2.addEventListener("click", () =>{ ' . $verdadero . '});';
