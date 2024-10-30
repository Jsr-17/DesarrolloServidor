<?php
require ("euros.php");

function muestraTabla()
{

  $valorCantidad = isset($_GET["cantidad"]) ;
  $coste = (int)$_GET["coste"];
  $cantidad=(int)$_GET["cantidad"];
  $valorPesetas= euros2pesetas($coste)*$cantidad;
  $valorEuros=$coste*$cantidad;

    echo("
        <table>
  <tr>
    <td>Nombre</td>
    <td>Cantidad</td>
    <td>Coste</td>
    <td>Coste Pesetas</td>
    <td>Coste euros</td>
  </tr>
    <tr>
    <td>".(string)$_GET["nombre"]."</td>
    <td>".(string)$_GET["cantidad"]."</td>
    <td>".(string)$_GET["coste"]."</td>
        <td>".$valorPesetas."</td>
    <td>".$valorEuros."</td>
  </tr>
  </table>
        ");


}