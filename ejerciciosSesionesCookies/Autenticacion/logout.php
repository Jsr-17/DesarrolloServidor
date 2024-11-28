<?php
#necesitas para poder destruir las sesiones en primer lugar obtenerlas es obligatorio por que si no php no lo reconoce
session_start();
session_destroy();
header("location:index.php");

