<?php
if (isset($_POST["numero"])) {

    $numero = $_POST["numero"];
    if ($numero >= 18 && $numero <= 130) {
        echo "El numero que has escrito es " . $numero;
    } else {
        if ($numero = " ") {
            header("Location:parte1.php?dato=No puede introducir espacios vacios");
        } else {
            header("Location:parte1.php?dato=El numero introducido no es valido " . $numero);
        }
    }
}
?>