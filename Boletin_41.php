<?php 
    /*
        Función usada para crear el vector con los números 
        aleatorios de tamaño size
    */
    function notas_aleatorias($size)
    {
        $Notas=array();
        // Se crea el vector $Notas vacio
        // y a continuación se general los valores aleatorios
        for($i=0;$i<$size;$i++)
        {
            $not=rand(0,10);            
            array_push($Notas, $not);
        }
    return $Notas;
    }
    //se usa un tamaño de vector de forma aleatoria
    $TamanoArreglo=rand(1,20);
    echo "Tamaño del arreglo = $TamanoArreglo </br>";
    echo "Notas = ";
    //se llama a la función notas_aleatorias($size)
    // para crear y devolver el vector aleatorio y se guarda 
    // en $Array
    $Arreglo=notas_aleatorias($TamanoArreglo);
    for($i=0;$i<$TamanoArreglo;$i++)
    {
        echo "$Arreglo[$i]  ";
    }
?>   