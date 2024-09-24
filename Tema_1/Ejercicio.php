<?php
    
    //Ejercicio 1 
    $name="Jose Antonio";
    $edad=20;
    $ciudad="Granada";
    printf(" Mi nombre es: %s  tengo %d anyos y soy de %s", $name, $edad, $ciudad);

    //Ejercicio 2
    
    $n1=12;
    $n2=3;

    $resta=$n1-$n2;
    $suma=$n1+$n2;
    $multiplicacion=$n1*$n2;
    $division=$n1/$n2;
    
    echo "\n";
    echo  $resta ;
    echo "\n";

    echo  $suma;
    echo "\n";

    echo $multiplicacion;
    echo "\n";

    echo $division;
    echo "\n";

    //Ejercicio 3

    const IVA =0.21 ;
    $precio=2.23;
    $resultado=$precio*IVA;
    echo "<br>";

    printf( "El precio del producto sin IVA es %s", $precio);
    echo "<br>";

    printf ("El precio del producto con IVA es %s, el IVA es %s",($resultado+$precio),$resultado);

    //Ejercicio 4 

    $edad=0;
    echo "<br>";

    if($edad<18){
        echo "Es Menor de edad ";
    }    else if($edad>=18){
        echo "Adulto si tiene entre 18 y 64 años";
    }else{
        echo "Tercera edad si tiene 65 años o más.";
    }

    echo "<br>";

    //Ejercicio 5
    $dia=4;
    switch ($dia) {
        case 1:
            echo "Día 1: Lunes";
            break;
        case 2:
            echo "Día 2: Martes";

            break;
        case 3:
            echo "Día 3: Miércoles";
            break;

        case 4:
            echo "Día 4: Jueves";

            break;
        case 5:
            echo "Día 5: Viernes";

            break;
        case 6:
            echo "Día 6: Sabado";

            break;
        case 7:
            echo "Día 7: Domingo";

            break;
        default:
            echo "Introduzca un valor valido";
        break;
    }
    echo "<br>";
    //Ejercicio 6
    $a=1;
    while ($a <= 10) {
        echo $a;
        $a++;
        echo "<br>";

    }
    //Ejercicio 7

    for ($i=0; $i <10 ; $i++) { 
        echo $i*5;
        echo "<br>";

    }
    //Ejercicio 8
    echo"<br>";
    $a=0;
    do {
        echo $a;
        echo "<br>";
        $a++;
    } while ($a <= 5);

    //Ejercicio 9

    for ($i=0; $i < 20; $i++) { 
        if ($i%2== 0) {
            echo $i;
            echo"<br>";
        }
    }
    //Ejercicio 10

    for ($i=0; $i < 20; $i++) { 
        if ($i%2== 0) {
            continue;
        }
        echo $i;
        echo"<br>";
    }
    echo"<br>";
    //Ejercicio 11
    $a= 0;
    while ($a <= 10) {
        if($a==5){
        break;
        }
        echo $a;
        echo "<br>";  
        $a++;
    
    }

?>