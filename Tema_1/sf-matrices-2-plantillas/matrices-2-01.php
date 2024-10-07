<?php
/**
 * matrices-2-01.php
 *
 * @author Escribe aquí tu nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Diccionario multilingüe.
    Escriba aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Diccionario multilingüe</h1>

  <p>Actualice la página para mostrar una nueva palabra.</p>

<?php

$arrAsociativo=["Cepillo"=>"brush","peral"=>"नाशपाती","fornite"=>"watea","repollo"=>"ikhaphetshu"];
$idioma=["Ingles","Hindi","Maori","Xhosa"];
$pos=0;
$mykey=[];
$nAleatorio=rand(0,3);


foreach($arrAsociativo as $key => $value)
{
  $mykey[$pos] = $key;
  $pos++;
}

for ($i=0; $i < 4; $i++) { 
  if ($i ==$nAleatorio) {
    echo "El objeto se llama:  ";
   echo $mykey[$i];
   echo " en el idioma elegido se dice : ";
   echo $arrAsociativo[$mykey[$i]];
   echo " y por ultimo el idioma elegido es: ";
   echo $idioma[$i];
  }

}



?>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
