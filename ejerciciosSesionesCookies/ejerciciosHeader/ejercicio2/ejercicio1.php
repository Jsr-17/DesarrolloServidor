<?php
session_start();
$_SESSION["nombre"] = "paco";

?>

<form action="ejercicio2.php" method="get">
    <input type="text" name="nombreUsuario" placeholder="Escriba aqui" value="">
    <button type="submit">Enviar</button>
</form>

<?php

if (isset($_GET["datos"])) {
    echo $_GET["datos"];
}
?>