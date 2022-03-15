<?php 
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
    function Mostrar($array)
    {
        for($i=0;$i<count($array); $i++)
        {
            echo $array[$i]."<br>";
        }
    }
    // función creada para determinar las materias aprobadas 
    // en el curso que recibe como parámetro el vector generado 
    //de forma aleatoria, se genera un nuevo vector con las notas aprobadas
    function notas_aprobadas($array)
    {
        $aprobadas=array();
        for($i=0;$i<count($array);$i++)
        {
            if($array[$i]>=5)
                array_push($aprobadas,$array[$i]);
        }
        return $aprobadas;
    }
    $TamanoArreglo=rand(1,20);
    $ArregloNotas = notas_aleatorias($TamanoArreglo);
    echo "Arreglo Original de $TamanoArreglo notas<br>";
    Mostrar($ArregloNotas);
    $Aprobadas=notas_aprobadas($ArregloNotas);
    $NumNotas=count($Aprobadas);
    echo "Arreglo de notas aprobadas( $NumNotas) notas<br>";
    Mostrar($Aprobadas);
?>