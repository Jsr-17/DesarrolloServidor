<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "biblioteca.php";
        require "euros.php"
    ?>
    <form  method="POST"  action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number"  name="n1">
        <input type="number"  name="id2" >
        <button type="submit">Enviar</button>
    </form>

    <?php
                $arr=[];

    
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            $arr[0]=$_POST['n1'];
            $arr[1]=$_POST['id2'];


            $resultado=suma($arr[0],$arr[1]);
            echo $resultado;
            echo "<br>";
            $resultado=resta($arr[0],$arr[1]);
            echo $resultado;
            echo "<br>";
            $resultado= multiplicacion($arr[0],$arr[1]);
            echo $resultado;
            echo "<br>";
            $resultado=division($arr[0],$arr[1]);
            echo $resultado;
            echo "<br>";
            $resultado= modulo($arr[0],$arr[1]);
            echo $resultado;

            echo "<br>";
            $resultado=peseta2euros($arr[0]);
            echo $resultado;
            echo"<br>";

            $resultado=euros2pesetas($arr[0]);
            echo $resultado;
            echo"<br>";
        }
    ?>
    
</body>
</html>