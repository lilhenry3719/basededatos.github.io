<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body bgcolor="#f7863a">
        <?php

        $NOMBRE=$_POST['NOMBRE'];
        $AUTOR=$_POST['AUTOR'];
        $GENERO=$_POST['GENERO'];
        $LIBROS=$_POST['LIBROS'];
        $TOTAL=$LIBROS;
        $TOTAL=$_POST['LIBROS'];
        $linea1="INSERT INTO libros (NOMBRE, AUTOR, GENERO, DISPONIBLES, TOTAL_DE_LIBROS) ";
        $linea2=" VALUES ('$NOMBRE', '$AUTOR', '$GENERO', '$TOTAL', '$LIBROS') ";
        $consulta=$linea1.$linea2;
        //echo $consulta;

        if ( ! $link=mysqli_connect('localhost','root',''))
        {
             echo "<a href=PAGINA1.php>Error al conectar</a>"; exit ;
        }

        if ( ! mysqli_select_db($link, "biblioteca"))
        {
             echo "<a href=PAGINA1.php>Error al seleccionar BDD</a>"; exit;
        }

        if ( ! $result=mysqli_query($link, $consulta))
        {
             echo "<a href=PAGINA1.php>Error en la consulta</a>"; exit;
        }

        header('location: /PROYECTO/PAGINA1.php');
        
        mysqli_close($link);
?>
</body>
</html>