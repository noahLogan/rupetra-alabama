<?php
	include("crud-conection.php");
	
	$regelimina = $_POST['regelimina'];
		
	$cadena = "DELETE FROM alumnos WHERE id= ".$regelimina;
	
	$run=mysqli_query ($conn,$cadena);
	echo $run;
	if ($run) {
		echo "<script type='text/javascript'>alert('Registro eliminado.')</script>";
	}
	mysqli_close($conn);
	
  //Redireccionamos a la pagina principal	
  echo "<SCRIPT LANGUAGE='JavaScript'>
		location.href='crud-delete.php';
	</SCRIPT>";
?>
