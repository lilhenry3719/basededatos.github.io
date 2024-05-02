<HTML>
    <HEAD>
        <TITLE>Libros</TITLE>
        <link rel="stylesheet" href="back.css">
    </HEAD>
    <BODY>
<?php
$linea1="SELECT * FROM  ORDER BY AUTOR";
$consulta=$linea1;
//echo $consulta;
if ( ! $link=mysqli_connect('localhost','root',''))
{
echo "<a href=PAGINA1.php>Error al conectar</a>";
exit ;
}
if ( ! mysqli_select_db($link, "clothestore"))
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
echo "<TABLE BORDER=0>";
echo "<TR><TD>Nombre</TD><TD>Imagen</TD></TR>";

for ($i=0;$i<mysqli_num_rows($result);$i++)
{
$row = mysqli_fetch_assoc($result);
$Nombre = $row['NOMBRE'];
$Imagen = $row['FOTO'];

echo "<TR><TD> $Nombre </TD><TD> <IMG src=IMAGENES/$Imagen WIDTH='102' HEIGHT='145'> </TD> </TR>";
}
echo "</TABLE>";
echo "</CENTER>";
echo "<br><br><a href='PAGINA1.php'>Inicio</a>";
mysqli_close($link);
?>

</BODY>
</HTML>
