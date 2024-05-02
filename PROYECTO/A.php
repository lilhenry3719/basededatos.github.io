<HTML>
    <HEAD>
        <TITLE>Libros</TITLE>
    </HEAD>
    <BODY bgcolor="#f7863a">
<?php
$linea1="SELECT * FROM libros WHERE GENERO='Aventura'";
$consulta=$linea1;
//echo $consulta;
if ( ! $link=mysqli_connect('localhost','root',''))
{
echo "<a href=PAGINA1.php>Error al conectar</a>";
exit ;
}
if ( ! mysqli_select_db($link, "biblioteca"))
{
echo "<a href=PAGINA1.php>Error al seleccionar BDD</a>";
exit;
}
if ( ! $result=mysqli_query($link, $consulta))
{
echo "<a href=PAGINA1.php>Error en la consulta</a>";
exit;
}

echo "<CENTER>";
echo "<h2>LISTA DE LIBROS</h2>";
echo "<CENTER>";
echo "<TABLE BORDER=50 BORDERCOLOR=D63535 CELLSPACING=0>";
echo "<TR bgcolor=f7863a><TD>Nombre</TD> <TD>Autor</TD>  <TD>Imagen</TD></TR>";

for ($i=0;$i<mysqli_num_rows($result);$i++)
{
$row = mysqli_fetch_assoc($result);
$Nombre = $row['NOMBRE'];
$Autor = $row['AUTOR'];
$disponibles = $row['DISPONIBLES'];
$Imagen = $row['FOTO'];

echo "<TR bgcolor=f7863a><TD> $Nombre </TD> <TD>$Autor</TD>  <TD> <img src=IMAGENES/$Imagen WIDTH='157' HEIGHT='220'> </TD> </TR>";
}
echo "</TABLE>";
echo "</CENTER>";
echo "<br><br><a href='PAGINA1.php'>Inicio</a>";


mysqli_close($link);
?>

</BODY>
</HTML>