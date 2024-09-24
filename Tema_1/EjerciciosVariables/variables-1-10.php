<?php
/**
 * Variables. Sin formularios.(1) 15 - variables-1-10.php
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
    Ataque alienígena.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Ataque alienígena</h1>

  <p>Actualice la página para mostrar un nuevo bombardeo alienígena. Los dados determinan qué casillas son bombardeadas.</p>

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
  <p>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
      width="830" height="160" viewBox="-40 -50 830 160" style="background-color: white;" font-family="sans-serif">
      <polygon points="60,0 780,0 720,80 0,80" stroke="black" stroke-width="1" fill="none" />
      <text x="180" y="105" text-anchor="middle" font-size="20" fill="black">5</text>
      <text x="380" y="105" text-anchor="middle" font-size="20" fill="black">10</text>
      <text x="580" y="105" text-anchor="middle" font-size="20" fill="black">15</text>
      <line x1="100" y="0" x2="40" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="140" y="0" x2="80" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="180" y="0" x2="120" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="220" y="0" x2="160" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="260" y="0" x2="200" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="300" y="0" x2="240" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="340" y="0" x2="280" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="380" y="0" x2="320" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="420" y="0" x2="360" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="460" y="0" x2="400" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="500" y="0" x2="440" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="540" y="0" x2="480" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="580" y="0" x2="520" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="620" y="0" x2="560" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="660" y="0" x2="600" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="700" y="0" x2="640" y2="80" stroke="black" stroke-width="1" fill="none" />
      <line x1="740" y="0" x2="680" y2="80" stroke="black" stroke-width="1" fill="none" />
<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
      <text x="0" y="20" text-anchor="middle" font-size="60">
        &#x1f6f8;
        <animateTransform attributeName="transform" attributeType="XML" type="translate" from="0 -5" to="840 -5" begin="0.5s" dur="2s" repeatCount="1" fill="freeze" />
      </text>
    </svg>
  </p>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>
