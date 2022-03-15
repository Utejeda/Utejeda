
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletín 5 3</title>
    </head>
    <body>
        <form name="frmPrueba" method="post" action="Boletin_53.php" >
            <h1>Boletín 5 3</h1>
            <br>
            Número 1:  <input type="text" name="txtN1"  /><p> <!-- definición del 1er operando  -->
            Número 2:  <input type="text" name="txtN2"  /><p> <!-- definición del 2do operando  -->
            <!-- se crea un "select" con las 3 operacion a realizar" -->
            <select name="operacion">
                <option>Seleccione una Operación...</option>
                <option> Suma </option>
                <option> Resta </option>
                <option> Multiplica </option>
            </select>   <p>
            <input type="submit" name="btnEnviar" value="Calcular" />   
        </form>
    </body>
</html>
<?php 
    if(isset($_POST['txtN1'])&&isset($_POST['txtN2'])&&isset($_POST['operacion']))
    {
        /*
            se toman los valores de a operar y la operación 
            a realizar 
        */
        $N1= $_POST['txtN1'];
        $N2= $_POST['txtN2'];
        $operacion=$_POST['operacion'];
        // de acuerdo a la operación se muestra el resultado
        //
        switch($operacion)
        {
            case "Suma":
                $Resultado=$N1+$N2;
                echo "Suma $N1 + $N2 =$Resultado";
            break;
            case "Resta":
                $Resultado=$N1-$N2;
                echo "Resta $N1 - $N2 =$Resultado";
            break;
            case "Multiplica":
                $Resultado=$N1*$N2;
                echo "Multiplicación $N1 * $N2 =$Resultado";
            break;
        }
    }
?>