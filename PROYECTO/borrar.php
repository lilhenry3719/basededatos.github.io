<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="letras.css"
        <title></title>
    </head>
    <body bgcolor="#f7863a">
        
        <?php
        $linea1="SELECT * FROM libros";
        $consulta=$linea1;
        //echo $consulta;
        if (! $link=mysqli_connect('localhost','root',''))
        {
            echo"<a href=PAGINA1.php>Error al conectar</a>";exit;
        }
        if(! mysqli_select_db($link,"biblioteca"))
        {
            echo"<a href=PAGINA1.php>Error al seleccionar BDD</a>";exit;
        }
        if(! $result=mysqli_query($link, $consulta))
        {
            echo"<a href=PAGINA1.php>Error en la consulta</a>";exit;
        }
        echo"<CENTER>";
        echo"<h2>Libro a Borrar</h2>";
        echo"<CENTER>";
        echo"<FORM ACTION=borrar2.php METHOD=POST>";
        echo"<TABLE BORDER=0 cellspacing=0>";
      

        for($i=0;$i<mysqli_num_rows($result);$i++)
        {
            $row = mysqli_fetch_assoc($result);
            $ID_LIBRO= $row['ID_LIBRO'];
            $Nombre = $row['NOMBRE'];
            $AUTOR=$row['AUTOR'];
            $Imagen = $row['FOTO'];
            $disponibles = $row['DISPONIBLES'];
            echo"<table border=50 bordercolor=D63535 cellspacing=1 width=300>";
            echo "<TR><TD><CENTER><IMG src=IMAGENES/$Imagen WIDTH='157' HEIGHT='220'></CENTER><CENTER><BR>$Nombre<BR> $AUTOR<BR> Disponibles [$disponibles]<BR>  <input type='checkbox' name='Borrar[$ID_LIBRO]'>$ID_LIBRO<BR></CENTER>   </TD> </TR><br>";
            echo "</table>";
        }
        echo "</TABLE>";
        echo "<INPUT type='submit' value='Borrar'>";
        echo "</FORM>";
        echo "</CENTER>";
        echo "<br><br><a href='PAGINA1.php'>Inicio</a>";
        mysqli_close($link);
        ?>
</body>
</html>