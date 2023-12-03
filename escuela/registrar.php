<?php
    //Para registrar
    include('conexion.php');
    
    $correo = $_POST["txtcorreo"];
    $password = $_POST["txtpassword"];
    $usu = $_POST["txtnombre"];
    $rol = $_POST["txtrol"];
    $queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '$correo'");
    $nr = mysqli_num_rows($queryusuario); 
    
    if ($nr == 0)
    {
        $queryregistrar = "INSERT INTO usuarios(correo, password, username, rol) values ('$correo','$password','$usu','$rol')";
        if(mysqli_query($conn,$queryregistrar))
        {
            echo "<script> alert('Usuario registrado: $usu');window.location='iniciar-sesion.php' </script>";
        }
        else 
        {
            echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
        }
    }

    else
    {
        echo "<script> alert('No puedes registrar este correo: 
        $correo');window.location= 'iniciar-sesion.php' </script>";
    }
?>