

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletín 5 4_1</title>
    </head>
    <body>
        <form method="post" action="Boletin_54_2.php" >
            <h1>Boletín 5 4 1</h1>
            <br>
            <!--  se pasa el nombre a la siguiente página como un parametro input "hidden"   -->
            <input type="hidden" name="txtNombre" value = "<?php echo $_POST['txtNombre'];?>" />           
            <!--  se pide el apellido de la persona -->
            Apellido:<input type="text" name="txtApellido"  /><p>            
            <!-- sa llama a la página Boletin_54-2.php pasando como
            parámetro el nombre, que viene de la página anterior
            y pasando como parámetro ahora támbien el apellido-->
            <input type="submit"  value="Siguiente" />             
        </form>
    </body>
</html>
