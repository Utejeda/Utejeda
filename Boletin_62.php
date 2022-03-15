<?php        
/*
    Verifica si la cookie llamada 'usuario' 
    existe muestra  el siguiente mensaje 
    "La Cookie 'usuario' está activa"
*/
    if( isset($_COOKIE['usuario']) )
    { 
        $Nombre = $_COOKIE['usuario'];
        echo("La Cookie 'usuario' está activa<p>");
    }
/*
    se la cookie no existe la crea
    Nombre = 'usuario'
    Valor 'Uriel Tejeda Alamillo'
    Tiempo 2 minuitos
    */
    else
    { 
        echo "La Cookie 'usuario'  está desactivada<br>";
        setcookie("usuario", "Uriel Tejeda Alamillo", time() + (60*2) );
        $Nombre = "Uriel Tejeda Alamillo";
        echo("La Cookie 'usuario' se acaba de crear<p>");
        
    }
    echo "Bienvenido Usuario: $Nombre   ";   
?>
