<?php
require("euros.php");

function muestraTabla()
{

  $valorCantidad = isset($_GET["cantidad"]);
  $coste = (int) $_GET["coste"];
  $cantidad = (int) $_GET["cantidad"];
  $valorPesetas = euros2pesetas($coste) * $cantidad;
  $valorEuros = $coste * $cantidad;

  echo ("
    
    <ul>
    <li>".(string)$_GET['nombre'].": ".($valorEuros)."</li>
      </ul>
 ");
}

muestraTabla();