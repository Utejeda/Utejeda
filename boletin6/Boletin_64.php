<?php        
    
    if( isset($_COOKIE['contador']) )
    { 
        // si la cookie existe toma el valor del contador y lo incrementa en 1        
        $Contador=$_COOKIE['contador'];
        $Contador++;
        setcookie("contador", $Contador, time() + (60*10) );          
        echo "Número de visitas a la páginas = $Contador";
    }
    else
    { 
        // si la cookie no existe la crea indicando como 
        // valor inicial 0
        $Contador=0;
        echo "La Cookie 'contador'  se acaba de crear  <br>";   
        echo "Número de visitas a la páginas = $Contador";     
        setcookie("contador", $Contador, time() + (60*10) );   
    }
?>
