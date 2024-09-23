<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $txt="texto";

    $len=strlen("hi World");

    echo "Hola mundo tengo " . $len . " años.";

    $words=str_word_count("Las manzanas asadas no le gustan ni al tato");
    
    echo "<br>";

    echo "La frase almacenada  tiene este número de letras ".$words;

   

    echo "<br>";

    $existe=strpos("Me gusta la música clasica","música");

    echo strtoupper($txt);
    
    echo "<br>";
    
    echo str_replace("texto","data",$txt);
    
    echo "<br>";
    echo $txt;

    echo "<br>";

    echo strrev($txt);

    echo "<br>";

    $txt="   Salchicha   ";
    
    echo trim($txt);

    echo "<br>";

    $txt_array=explode(" ",$txt);

    print_r($txt_array);   
    
    echo "<br>"; 
    echo substr(trim($txt),5,5);
    echo "<br>"; 
    var_dump($txt);

    $int =12;
    $float=12.123423;
    $string_num="12345";
    $integer_float=(float)$int;
    $float_integer=(int)$float;
    $int_num=(int)$string_num;

    echo "<br>";
    echo var_dump($integer_float);
    echo "<br>";
    echo var_dump($float_integer);
    echo "<br>";
    echo var_dump($int_num);
    echo "<br>";

    $cars=array("Volvo", "BMW", "Toyota",3);

    for ($i=0; $i < count($cars); $i++) { 
        echo $cars[$i];
        echo "<br>"; 
    }
foreach($cars as $value){
    echo $value;
    echo "<br>"; 

}
    


    ?>
</body>
</html>