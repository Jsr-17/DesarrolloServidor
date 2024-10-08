<?php

function muestraTabla(){
    if ($_GET["nombre"]!=0 && $_GET["cantidad"]!=0 && $_GET["coste"]!=0) {
        echo"
        <table>
  <tr>
    <td>Nombre</td>
    <td>Cantidad</td>
        <td>Coste</td>
  </tr>
    <tr>
    <td>".$_GET("nombre")."</td>
    <td>".$_GET("cantidad")."</td>
    <td>".$_GET("nombre")."</td>
  </tr>
  </table>
        ";
    }

}