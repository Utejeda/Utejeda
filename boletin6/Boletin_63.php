<?php        
    //se configura para mostrar la hora en formato Español
    ini_set('date.timezone','Europe/Madrid'); 
    
    
    if( isset($_COOKIE['hora']) )
    { 
        // Se verifica si existe la cookie "hora"
        //en el caso de no existir crea la cookie con la hora actual
        $Fecha_1= date("d/m/y ")."  ". date("g:i:s A"); 
        $Fecha=$_COOKIE['hora'];
        setcookie("hora", $Fecha_1, time() + (60*10) );           
        echo "Ultima vez $Fecha";
    }
    else
    {         
        //En el caso de existir muestra la ultima vez que se uso la página
        //y se creas de nuevo la cookie pero con la nueva hora
        $Fecha= date("d/m/y ")."  ". date("g:i:s A");    
        echo "La Cookie 'hora'  se acaba de crear  $Fecha<br>";        
        setcookie("hora", $Fecha, time() + (60*10) );   
    }
?>
