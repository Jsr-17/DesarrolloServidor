<?php
//destruye los datos de php sesiones y variables
session_destroy();
unset($_COOKIE["Ultima visita"]);
header("Location: login.php");