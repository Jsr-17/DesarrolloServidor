<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $tabla;
    for ($i = 0; $i <= 10; $i++) {
        for ($e = 0; $e <= 10; $e++) {
            switch ($i) {
                case 0:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 1:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 2:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 3:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 4:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 5:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 6:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 7:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 8:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 9:
                    $tabla[$i][$e] = $i * $e;
                    break;
                case 10:
                    $tabla[$i][$e] = $i * $e;
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
    echo "<table>";
    for ($i = 0; $i <= 10; $i++) {
        echo "<tr >";
        for ($e = 0; $e <= 10; $e++) {
            echo "<td>     " . $tabla[$i][$e] . "     </td>";
        }
        echo "</tr>";
    }
    echo "</table>";



    ?>
</body>

</html>