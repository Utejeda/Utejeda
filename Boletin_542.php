

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletín 5 42</title>
    </head>
    <body>
        <form  >
            <h1>Boletín 5 4 2</h1>
            <br>
            <?php 
                /* se tomas los 2 parámetros que provienen de las páginas
                anteriores y se muestran en la página*/
                echo  "<h2>Saludos: ". $_POST['txtNombre']." ".  $_POST['txtApellido']."</h2>"; 
            ?>          
        </form>
    </body>
</html>
