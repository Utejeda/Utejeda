<?php 
    //función creada en la ejercicio anterior para generar y devolver
    //un vector de tamaño $size de forma aleatoria
    function notas_aleatorias($size)
    {
        $Notas=array();
        for($i=0;$i<$size;$i++)
        {
            $not=rand(0,10);            
            array_push($Notas, $not);
        }
    return $Notas;

    }
    /*
    procedimiento creada para mostrar el vector generado
    */
    function Mostrar($array)
    {
        for($i=0;$i<count($array); $i++)
        {
            echo $array[$i]."<br>";
        }
    }
    // Procedimiento creado para determinae y
    // mostrar los valores solicitados
    //      Valor minimo
    //      Valor máximo
    //      Valor media    
    function estadisticas($array)
    {
        $maxima = max($array);
        $minimo = min($array);
        $media = array_sum($array)/count($array);
        echo "Máxima del arreglo  = $maxima<br>";
        echo "Minima del arreglo  = $minimo<br>";
        echo "Media del arreglo  = $media<br>";
    }
    //$TamanoArreglo de forma aleatoria    
    $TamanoArreglo=rand(1,20);
    echo "Tamaño del vector: $TamanoArreglo<br>";
    //Crea el vector forma aleatodia
    $notas = notas_aleatorias ($TamanoArreglo);
    //Muetra el vector generado
    Mostrar($notas);
    //Muestra los valores solicitados
    estadisticas($notas);
?>