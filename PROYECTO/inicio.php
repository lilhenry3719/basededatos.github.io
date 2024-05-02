<HTML>
    <HEAD>
        <TITLE>Libros</TITLE>
        <link rel="stylesheet" href="back.css">
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
<?php
include("conexion.php");

session_start();
$_SESSION['login'] = false;

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$consult = mysqli_query($conexion, "SELECT * FROM personas WHERE nombre= '$usuario' AND contra= '$contrasena'");

if(mysqli_num_rows($consult) > 0)
{
    header('location: /PROYECTO/PAGINA1.php');
    exit();
}
else
{
    echo '
    <script>
    alert ("el usuario no existe");
    window.location = "http://localhost/PROYECTO/INICIO.html";
    </script>
  
    ';
   
    exit();
}



?>

</BODY>
</HTML>