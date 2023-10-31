<?php
	include("crud-conection.php");
	
	$idL = @$_POST['idlista'];
	$nombreN = @$_POST['nombrenuevo'];
	$apellidoN = @$_POST['apellidonuevo'];
	$tutorN = @$_POST['tutornuevo'];
	$edadN = @$_POST['edadnuevo'];
	$fechaN = @$_POST['fechannuevo'];
	$direccionN = @$_POST['direccionnuevo'];
	
	$cadena = "UPDATE alumnos SET nombre='$nombreN', apellido='$apellidoN', tutor='$tutorN', edad='$edadN', fechanacimiento='$fechaN', direccion='$direccionN' where id= ".$idL;
	
	$run=mysqli_query ($conn,$cadena);
	echo $run;
		
	mysqli_close($conn);
	
  //Redireccionamos a la pagina principal	
  echo "<SCRIPT LANGUAGE='JavaScript'>
		location.href='crud-list-students.php';
	</SCRIPT>";
?>
