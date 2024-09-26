<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dado=rand(1,6);
        $dado2=rand(1,6);



        print(
            '<img src="./img/'.$dado.'.svg" alt="">
            <img src="./img/'.$dado2.'.svg" alt="">
            '
            
        );
            if ($dado==$dado2) {
                echo "Has sacado pareja de: ".$dado;
            }elseif ($dado>$dado2) {
                echo "No has sacado pareja, el valor mas alto es: ".$dado;
            }elseif ($dado2>$dado) {
                echo "No has sacado pareja, el valor mas alto es: ".$dado2;
            }
    ?>
    
</body>
</html>