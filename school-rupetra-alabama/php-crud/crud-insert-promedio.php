<?php
    //Para registrar
    include('crud-conection.php');
    
    $nombre = $_POST["name-promedio"];
    $apellido = $_POST["lastname-promedio"];
    $matematicas = $_POST["matematicas-promedio"];
    $geografia = $_POST["geografia-promedio"];
    $artes = $_POST["artes-promedio"];
    $ciencia = $_POST["ciencia-promedio"];
	$promedio = $_POST["promedio"];
//$rol = $_POST["txtrol"];
    $queryusuario = mysqli_query($conn,"SELECT * FROM calificaciones WHERE nombre = '$nombre'");
    $nr = mysqli_num_rows($queryusuario); 
    
    if ($nr == 0)
    {
        $queryregistrar = "INSERT INTO calificaciones(nombre, apellido, matematicas, geografia, artes, ciencia, promedio) values ('$nombre','$apellido','$matematicas', '$geografia', '$artes', '$ciencia', '$promedio')";
        if(mysqli_query($conn,$queryregistrar))
        {
            echo "<script> alert('Calificación del alumno registrado: $nombre $apellido');window.location='crud-access-profesor.php' </script>";
        }
        else 
        {
            echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
        }
    }

    else
    {
        echo "<script> alert('No puedes registrar la calificación de este alumno: 
        $nombre');window.location= 'crud-access-profesor.php' </script>";
    }
?>