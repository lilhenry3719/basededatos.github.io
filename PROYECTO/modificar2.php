<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body bgcolor="#f7863a">
<?php
$Nombre = $_POST['Nombre'];
$Autor = $_POST['Autor'];
$Id = $_POST['Id'];
$linea1="UPDATE libros ";

$linea2="SET NOMBRE='$Nombre', AUTOR='$Autor' ";

$linea3="WHERE ID_LIBRO='$Id' ";
$consulta=$linea1.$linea2.$linea3;
//echo $consulta;
if ( ! $link=mysqli_connect('localhost','root',''))
{
echo "<a href=modificacion.php>Error al conectar</a>";
exit ;
}
if ( ! mysqli_select_db($link, "biblioteca"))
{
echo "<a href=modificacion.php>Error al seleccionar BDD</a>";
exit;
}
if ( ! $result=mysqli_query($link, $consulta))
{
echo "<a href=modificacion.php>Error en la consulta</a>";
exit;
}
header('location: /PROYECTO/PAGINA1.php');
mysqli_close($link);
?>

</body>
</html>