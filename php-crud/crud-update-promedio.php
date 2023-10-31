<?php
	include("crud-conection.php");
	
	$idL = @$_POST['idlista'];
	$nombreN = @$_POST['nombrenuevo'];
	$apellidoN = @$_POST['apellidonuevo'];
	$matematicasN = @$_POST['matematicasnuevo'];
	$geografiaN = @$_POST['geografianuevo'];
	$artesN = @$_POST['artesnuevo'];
	$cienciaN = @$_POST['ciencianuevo'];
    $promedioN = @$_POST['promedionuevo'];
	
	$cadena = "UPDATE calificaciones SET nombre='$nombreN', apellido='$apellidoN', matematicas='$matematicasN', geografia='$geografiaN', artes='$artesN', ciencia='$cienciaN', promedio='$promedioN' where id= ".$idL;
	
	$run=mysqli_query ($conn,$cadena);
	echo $run;
		
	mysqli_close($conn);
	
  //Redireccionamos a la pagina principal	
  echo "<SCRIPT LANGUAGE='JavaScript'>
		location.href='crud-access-profesor.php';
	</SCRIPT>";
?>
