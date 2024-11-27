<h3> Este es el contador de visitas</h3>
<form action="contadorVisitas.php" method="get">
    <button type="submit">reiniciar</button>
    <input type="hidden" name="reinicia">
</form>

<?php


if (isset($_GET["reinicia"])) {
    setcookie("contador", 0);
    echo 0;
    return;
}

if (!isset($_COOKIE["contador"])) {
    setcookie("contador", 1);
} else {

    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador", $contador);
    echo  $contador;
}




?>