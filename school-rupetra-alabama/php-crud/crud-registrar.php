<?php
    //Para registrar
    include('crud-conection.php');
    
    $nombre = $_POST["name-student"];
    $apellido = $_POST["lastname-student"];
    $tutor = $_POST["tutor-student"];
    $edad = $_POST["edad-student"];
    $fechanacimiento = $_POST["fecha-nacimiento-student"];
    $direccion = $_POST["direccion-student"];
//$rol = $_POST["txtrol"];
    $queryusuario = mysqli_query($conn,"SELECT * FROM alumnos WHERE nombre = '$nombre'");
    $nr = mysqli_num_rows($queryusuario); 
    
    if ($nr == 0)
    {
        $queryregistrar = "INSERT INTO alumnos(nombre, apellido, tutor, edad, fechanacimiento, direccion) values ('$nombre','$apellido','$tutor', '$edad', '$fechanacimiento', '$direccion')";
        if(mysqli_query($conn,$queryregistrar))
        {
            echo "<script> alert('Alumno registrado: $nombre $apellido');window.location='crud-list-students.php' </script>";
        }
        else 
        {
            echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
        }
    }

    else
    {
        echo "<script> alert('No puedes registrar este alumno: 
        $nombre');window.location= 'crud-list-students.php' </script>";
    }
?>