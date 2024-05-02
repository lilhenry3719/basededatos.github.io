<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body bgcolor="#f7863a">
<?php
//import_request_variables("P","f_");
$Id=$_POST['Modificar'];
//$Nombre=$_POST['Nombre'];
//$Apellido=$_POST['Apellido'];
//$Especialidad=$_POST['Especialidad'];
$linea1="SELECT * FROM libros ";
$linea2=" WHERE ID_LIBRO='$Id' ";
$consulta=$linea1.$linea2;

//echo $consulta;
if ( ! $link=mysqli_connect('localhost','root',''))
{
echo "<a href=index.html>Error al conectar</a>"; exit ;
}
if ( ! mysqli_select_db($link, "biblioteca"))
{
echo "<a href=index.html>Error al seleccionar BDD</a>"; exit;
}
if ( ! $result=mysqli_query($link, $consulta))
{
echo "<a href=index.html>Error en la consulta</a>"; exit;
}
$row = mysqli_fetch_assoc($result);
$imagen = $row['FOTO'];
$Nombre = $row['NOMBRE'];
$Autor = $row['AUTOR'];
$Id = $row['ID_LIBRO'];
?>
<CENTER>
<h2>MODIFICACION DE MAESTROS</h2>
<center>
<FORM action='modificar2.php' method='POST'>
<TABLE border=0>
<TR>
<TD>Nombre</TD>
<TD><INPUT type='text' name='Nombre' size='30'
maxlength='30' value='<?php print ($Nombre); ?>' ></TD>
</TR>
<TR>
<TD>Autor</TD>
<TD><INPUT type='text' name='Autor' size='30'
maxlength='30' value='<?php print ($Autor); ?>' ></TD>
</TR>

<?php echo"
<TR>
<TD><img src=IMAGENES/$imagen WIDTH='157' HEIGHT='220'></TD>
</TR>
"?>

</table>
<INPUT type='hidden' name='Id' value='<?php print ($Id); ?>' ></TD>
<INPUT type='submit' value='Aceptar'>
</FORM>
</center>
<?php
mysqli_close($link);
?>
</body>
</html>     

