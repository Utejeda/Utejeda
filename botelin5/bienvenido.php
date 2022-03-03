
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletín 51 1</title>
    </head>
    <body>
        <form method="post" action="Boletin_51.php" >
        <h1>Boletín 5 1</h1>
        <br>
            <?php  
            /* se toman los valores txtNombre y txtApellido y 
            se muestar en este formulario */
                $Nombre =$_POST['txtNombre'];
                $Apellido = $_POST['txtApellido'];
                echo "Bienvenid@, $Nombre $Apellido";
            ?>                   
            <p>
            <!-- se crea el botón para regresar -->
            <input type="submit"  value="Regresar" />             
        </form>        
    </body>
</html>
