<HTML>
    <HEAD>
        <TITLE></TITLE>
    </HEAD>
    <BODY>
    <?php

 
 	$servidor = 'Localhost';
 	$user = 	'root';
 	$contrasena= '';
 	$BD = 	'biblioteca';
	
	   	$conexion = mysqli_connect($servidor, $user, $contrasena, $BD);
    if (!$conexion)
	{
		echo "fallo la conexion<br>";
		die("Connection failed" . mysqli_connect_error());
	}
	else
	{
		echo "conexion exitosa";
	}
	
    
	
	
 

 ?>


    </BODY>
</HTML>