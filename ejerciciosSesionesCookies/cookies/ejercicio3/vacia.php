<?php

session_start();
if (isset($_SESSION["color"])) {
    session_destroy();
    header("Location:fondo.php");
}
