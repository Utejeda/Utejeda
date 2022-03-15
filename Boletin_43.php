<?php 
   //función del ejercicio 41
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
        se procedimiento creada para mostrar el vector creado
    */
    function Mostrar($array)
    {
        for($i=0;$i<count($array); $i++)
        {
            echo $array[$i]."<br>";
        }
    }
    //función creado para agregar el 2do elemento al final del vectos
   function agregar_nota($array,$nota)
   {
        array_push($array,$nota);
    return $array;       
   }
   // Se genera el tamaño del arreglo, se le suma 1 para garantizar q el menos tenga 2 elementos, 
   // para poder cumplir con la concidión del programa
   $TamanoArreglo=1+rand(1,20);   
   echo "Arreglo original<br>";
   $Notas = notas_aleatorias ($TamanoArreglo);
   echo "Tamaño del arreglo Original = ".count($Notas)."<br>";
   Mostrar($Notas);
   $nota2=$Notas[1];
   $Notas=agregar_nota($Notas,$nota2);
   echo "Tamaño del arreglo Modificado = ".count($Notas)."<br>";
   echo "Arreglo modificado<br>";
   Mostrar($Notas);
?>