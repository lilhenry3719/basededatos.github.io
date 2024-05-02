<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body bgcolor="#f7863a">

<?php
$linea1="SELECT * FROM libros ";
$consulta=$linea1;
//echo $consulta;
if ( ! $link=mysqli_connect('localhost','root',''))
{
    echo "<a href=PAGINA1.php>Error al conectar</a>";
exit ;
}
if ( ! mysqli_select_db($link, "biblioteca"))
{
    echo"<a href=PAGINA1.php>Error al seleccionar BDD</a>";exit;
exit;
}
if ( ! $result=mysqli_query($link, $consulta))
{
    echo"<a href=PAGINA1.php>Error en la consulta</a>";exit;
exit;
}
echo "<CENTER>";
echo "<h2>Libro a modificar</h2>";
echo "<CENTER>";
echo "<FORM ACTION=modificacion.php METHOD=POST>";
echo "<TABLE BORDER=1>";
for ($i=0;$i<mysqli_num_rows($result);$i++)
{
//$id=mysql_result($result,$i,"id");
//$nombre=mysql_result($result,$i,"nombre");
$row = mysqli_fetch_assoc($result);
$imagen = $row['FOTO'];
$Nombre = $row['NOMBRE'];
$Autor = $row['AUTOR'];
$Id = $row['ID_LIBRO'];

echo "<TR><TD> <img src=IMAGENES/$imagen WIDTH='157' HEIGHT='220'></TD><TD> $Autor </TD><TD> $Nombre </TD><TD><input type='checkbox' name='Modificar' value=$Id>$Id</TD></TR>";
}

echo "</TABLE>";
echo "<INPUT type='submit' value='Modificar'>";
echo "</FORM>";
echo "</CENTER>";
mysqli_close($link);
?>
</body>
</html>