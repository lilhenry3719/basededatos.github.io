<?php
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="back.css">
	<title>pagina1</title>
</head>
<body>
  <table border="0"width="100%">
  	<tr background="IMAGENES/imagen1.jpg"height="150">
		  
  	  <td colspan="3"><center><font color="D63535"size="50">BIBLIOTECA PUBLICA</font></center></td>	
  	</tr>
  	<tr bgcolor="D63535"height="40">
  		<td colspan="3">
           <form action="donar.html"method='POST'>
			<div class="button input-box">
                <p align="right"><input type="submit" value="Donar libro"></p>
              </div>
  			</form>	
			  <form action="borrar.php"method='POST'>
				<div class="button input-box">
					<p align="right"><input type="submit" value="Borrar"></p>
				  </div>
				  </form>
				  <form action="modificar1.php"method='POST'>
				<div class="button input-box">
					<p align="right"><input type="submit" value="Modificar"></p>
				  </div>
				  </form>	
  	</tr>
  	<tr>
  		<td background="IMAGENES/imagen2.jpg"height="650"width="150"></td>
  		<td width="700">
  	       <center><table>
  	       	<tr>
  			  <td><a href="R.php"><img src="IMAGENES/romance.jpg"width="207"height="276"></a></td>
  			  <td><a href="S.php"><img src="IMAGENES/suspenso.jpg"width="207"height="276"></a></td>
  			  <td><a href="F.php"><img src="IMAGENES/fantacia.jpg"width="207"height="276"></a></td>
  			</tr> 
  			<tr>
  			  <td><a href="T.php"><img src="IMAGENES/terror.jpg"width="207"height="276"></a></td>
  			  <td><a href="C.php"><img src="IMAGENES/cienciaficcion.jpg"width="207"height="276"></a></td>
  			  <td><a href="A.php"><img src="IMAGENES/aventura.jpg"width="207"height="276"></a></td>	
  			</tr>
  		   </table></center>
  		</td>
  		<td background="IMAGENES/imagen2.jpg"height="650"width="150"></td>
  	</tr>
  </table>
</body>
</html>