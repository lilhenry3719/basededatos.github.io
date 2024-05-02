<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="back.css">
        <title></title>
    </head>
    <body>
        <?php
        if ( ! $link=mysqli_connect('localhost','admin','admin'))
        {
        echo "<a href=PAGINA1.php>Error al conectar</a>";
        exit ;
        }
        if ( ! mysqli_select_db($link, "biblioteca"))
        {
        echo "<a href=PAGINA1.php>Error al seleccionar BDD</a>";
        exit;
        }
        foreach($_POST['Borrar'] as $indice=>$valor)
        {
            if ($valor=="on")
            {
                $linea1="DELETE FROM libros ";
                $linea2=" WHERE ID_LIBRO='$indice' ";
                $consulta=$linea1.$linea2;
                echo "$consulta";   
            if ( ! $result=mysqli_query($link, $consulta))
            {
            echo "<a href=PAGINA1.php>Error en el borrardo</a>";
            exit;
            }
            }
        }
        header('location: /PROYECTO/borrar.php');
        mysqli_close($link);
        ?>
</body>
</html> 