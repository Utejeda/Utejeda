
<?php 
    
    /*
    Crea una Cookie con los siguientes valores
    nombre 'usuario'
    valor 'Uriel Tejeda Alamillo'
    y con un tiempo de vida de 2 minutos 
    */
    setcookie("usuario", "Uriel Tejeda Alamillo", time() + (60*2) );
    echo "<p>La cookie ha sido creada</p>";
    echo "Usuario: Uriel Tejeda Alamillo   ";
?>
