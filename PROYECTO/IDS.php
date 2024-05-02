<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="back.css">
        <title></title>
    </head>
    <body>
        <?php
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $contra=$_POST['contra'];
        $linea1="INSERT INTO personas (nombre, email, contra ) ";
        $linea2=" VALUES ('$nombre', '$email', '$contra') ";
        $consulta=$linea1.$linea2;
        //echo $consulta;
     
        if ( ! $link=mysqli_connect('localhost','admin','admin'))
        {
             echo "<a href=PAGINA1.php>Error al conectar</a>"; exit ;
        }

        if ( ! mysqli_select_db($link, "biblioteca"))
        {
             echo "<a href=PAGINA1.php>Error al seleccionar BDD</a>"; exit;
        }

        if ( ! $result=mysqli_query($link, $consulta))
        {
             echo "Error en la consulta"; exit;
        }

        
        
        header('location: /PROYECTO/INICIO.html');
        mysqli_close($link);
        ?>
    </body>
</html>