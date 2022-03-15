<?php            
    if(isset($_POST['txtNom']) && isset($_POST['txtApe']))
    {
        //Se veridica que se pasarón los campos txtNom y txtApe
        if((empty($_POST['txtNom']))||(empty($_POST['txtApe'])))
            if(isset($_COOKIE['nombre']))
            {                 
                //si los campos txtNom y txtApel estan vacios 
                // y la cookie existe se muestran los valores anteriores
                $Apellido=$_COOKIE['apellido'];      
                $Nombre="Visitande anterior ".$_COOKIE['nombre'];      
                $Nom="Bienvenid@, ".$Nombre." ".$Apellido." ";
            } 
            else  
                // si la cookie no existe se muesta este mensaje
                $Nom= "Las cookie no existe o falta algun campo";
        else
        { 
            //si se pasaron los 2 campos txtNom y txtApe
            //se crean las 2 cookie
            $Nombre= ($_POST['txtNom']);
            $Apellido= ($_POST['txtApe']);
            setcookie("nombre", $Nombre, time() + (60*10) );   
            setcookie("apellido", $Apellido, time() + (60*10) );  
            $Nom="Bienvenid@, ".$Nombre." ".$Apellido;            
        }            
    }    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletin 6 5</title>
    </head>
    <body>
        <form name="frmPrueba" method="post" action="Boletin_65.php" >
            <h1>Boletin 6 5</h1>
            <br>
            <h2> <?php echo "  $Nom"; ?></h2><p>
            <!-- regresa a la página anterior--> 
            <input type="submit" name="btnEnviar" value="Regresar" />   
        </form>
    </body>
</html>
