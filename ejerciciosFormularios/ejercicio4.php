<?php
// Initialize or retrieve the accumulated values array
$valor = isset($_POST["valorAcumulado"]) ? $_POST["valorAcumulado"] : [];
$valoracion = isset($_POST["valoracion"]) ? (int)$_POST["valoracion"] : null;
//primero asignarlo siempre
if ($valoracion !== null) {
    $valor = [...$valor, $valoracion];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumulador de Valoraciones</title>
</head>

<body>
    <form action="ejercicio4.php" method="post">
        <?php
        // luego simepre mostrar los elementos 

        foreach ($valor as $val) {
            echo '<input type="hidden" name="valorAcumulado[]" value="' . htmlspecialchars($val) . '">';
        }

        // Display the current accumulated values
        if (empty(!$valor)) {
            $suma = 0;
            for ($i = 0; $i < count($valor); $i++) {
                $suma += $valor[$i];
                echo $valor[$i] . "<br>";
            }
            $media = count($valor) > 0 ? $suma / count($valor) : $valor[0];
            echo $media;
        }
        ?>

        <select name="valoracion" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>