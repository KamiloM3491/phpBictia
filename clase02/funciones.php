<?php
    //FUNCIONES
    function edadPersona($edadMinima = 18){
        if($edadMinima >= 18){
            echo "La edad es: $edadMinima <br>";
        } else{
            echo "Eres menor de edad, Lo siento :( :( <br>";
        }
    }

    //array_push()

    edadPersona(35);
    edadPersona();
    edadPersona(70);
    edadPersona(10);
    echo "<hr>";

    // FUNCIÓN CON RETURN
    // En este caso definimos el tipo de dato del parámetro
    // siendo int / Integer = entero

    function sumar(int $x, int $y){
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sumar(5, 10) . "<br>";
    echo "7 + 13 = " . sumar(7, 13);

    /*
        1) Crear una función que imprima los números del 1 al 100
        y del 101 al 200.

        2) Crear una función que imprima las tablas de multiplicar
            del 1 al 10

        1 x 1 = ..
        1 x 2 = ..
        10 x 10 = ... 

        3) Crear una función que imprima los números múltiplos de 8
            hasta 500

    */




?>