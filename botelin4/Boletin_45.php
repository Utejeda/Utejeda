<?php 
    // se crea un arreglo para las diferentes opciones
    // de tabla de multiplicar 
    $opcion=array();
    for($i=1;$i<10;$i++)
    {
        array_push($opcion,$i);
    }
    array_push($opcion,"todas");
    //función para imprimir una tabla dada
    function imprime_tabla($numero)
    {
        echo "Tabla del $numero<br>";
        for($i=0;$i<10;$i++)
        {
            $res=$numero * $i;
            echo " $numero * $i = $res<br>";
        }
        echo "<br>";
    }
    //funcion para imprimir todas las tablas (1-9)
    function Todas()
    {
        $tab="&nbsp;&nbsp;&nbsp;&nbsp;";
        for($k=0;$k<2;$k++)
        {
    
            for($i=0;$i<10;$i++)
            {
                for($j=0;$j<5;$j++)
                {
                   
                    $res    =   $i * ($k*5+$j);
                    echo " ".($k*5+$j)." * $i =$tab$res$tab$tab";
                }
                echo "<br>";
            }
            echo "<br>";
         }        
    }
    //la $opcionSelecionada se determina de forma aleatoria
    $opcionSelecionada = $opcion[rand(0,9)];
    echo "Opción seleccionada = $opcionSelecionada<br>";
    // de acuerdo a la opción seleccionada 
    // se muestra la o las tablas correspondientes
    if($opcionSelecionada=="todas")
        Todas();
    else
        imprime_tabla($opcionSelecionada);
?>