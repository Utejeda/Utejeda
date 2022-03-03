
<?php 
    // de acuerdo al equipo seleccionado se configura el color de fondo
    $equipo = $_POST['equipo'];
    switch ($equipo)
    {
        case "Madrid":
            $color="white";
        break;
        
        case "Barcelona":
            $color="red";
        break;
        case "Sevilla":
            $color="yellow";
        break;
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletín 5 5_1</title>
    </head>
    <!-- se rellena todo el body con el color seleccionado -->
    <body style ="background-color:<?php echo $color;?>" >
        <form method="post" action="Boletin_55.php" >
            <h1>Boletín 5 5_1</h1>
            <br>
            <input type="submit" value="Regresar">
        </form>
    </body>
</html>
