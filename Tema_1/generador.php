<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



    function lo($data)
    {
        $numAleatorio = rand(1, 2);

        switch ($numAleatorio) {
            case 1:
                return mb_strtolower($data);

            case 2:
                return mb_strtoupper($data);

            default:
                # code...
                break;
        }

    }


    $abecedario = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $numAleatorio = rand(0, count($abecedario));
    $valor = lo($abecedario[$numAleatorio]);

    echo $valor

        ?>
</body>

</html>