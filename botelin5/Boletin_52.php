
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Boletín 5 2</title>     
    </head>
    <body>      
        <form name="frmPrueba" method="post" action="Boletin_52.php" >
        <h1>Boletín 5 2</h1>
            <br>
            <!-- se creal todos los input para pedir las notas de las materias
            -->
            Formación y orientación profesional:  <input type="text" name="txtN1"  /><p>
            Lenguaje de marcas:  <input type="text" name="txtN2"  /><p>
            Gestión de base de datos:  <input type="text" name="txtN3" /><p>
            Fundamentos de hardware:  <input type="text" name="txtN4"  /><p>
            Planificación y administración de redes:  <input type="text" name="txtN5"  /><p>
            Implantación de sistemas operativos:  <input type="text" name="txtN6"  /><p>               
            <!-- Se configura el botón Calcular para hecel los calculos solicitados-->
            <input type="submit" value="Calcular" />             
        </form>        
    </body>
</html>
<?php   
    if(isset($_POST['txtN1'])&&isset($_POST['txtN2'])&&isset($_POST['txtN3'])&&isset($_POST['txtN4'])&&isset($_POST['txtN5'])&&isset($_POST['txtN6']))
    { 
        //función creada epara el Boletin 4.2
        function Mostrar($array)
        {
            for($i=0;$i<count($array); $i++)
            {
                echo $array[$i]."<br>";
            }
        }
        if(is_numeric($_POST['txtN1'])&&is_numeric($_POST['txtN2'])&&is_numeric($_POST['txtN3'])&&is_numeric($_POST['txtN4'])&&is_numeric($_POST['txtN5'])&&is_numeric($_POST['txtN6']))
        {
            $Mat1=$_POST['txtN1'];
            $Mat2=$_POST['txtN2'];
            $Mat3=$_POST['txtN3'];
            $Mat4=$_POST['txtN4'];
            $Mat5=$_POST['txtN5'];
            $Mat6=$_POST['txtN6'];
            $Notas=array($Mat1, $Mat2, $Mat3, $Mat4, $Mat5, $Mat6  );
            $Media = array_sum($Notas)/count($Notas);
            $NotasAprobadas=array();
            $Materias=array(
                "Formación y Orientación profesional",
                "Lenguaje de marcas",
                "Gestión de base de datos",
                "Fundamentos de hardware",
                "Planificación y administración de redes",
                "Implantación de sistemas operativos"
            );
            // se agregan a un vector nuevo todas las notas aprobadas
            for($i=0;$i<count($Notas);$i++)
                if($Notas[$i]>=5)
                    array_push($NotasAprobadas,"$Materias[$i]: $Notas[$i]");
            // se determinan cuantas materias se aprobaron para mostras sus 
            // sus notas, en el caso de no aprobar ninguna se muestra 
            // "No aprobó ninguna materia"
            if(count($NotasAprobadas)>0)
            {
                echo "Cantidad de materias aprobadas ".count($NotasAprobadas)."<p>";
                Mostrar($NotasAprobadas);
            }
            else    
                echo "No aprobó ninguna materia<p>";
            echo "Media = $Media";
        }
        else
            echo "Alguna nota invalida";
    } 
?>
