<?php
    session_start();
    
    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
        exit;
    }

    $rol = $_SESSION["rol"];
    $username = $_SESSION["username"];
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "rupetraalabama";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    if ($rol == "admin") {
        echo "<SCRIPT LANGUAGE='JavaScript'>
		location.href='php-crud/crud-list-students.php';
	</SCRIPT>";
    
    } elseif ($rol == "profesor") {
        echo "<SCRIPT LANGUAGE='JavaScript'>location.href='php-crud/crud-access-profesor.php';</SCRIPT>";
    } elseif ($rol == "tutor") {
        echo "<SCRIPT LANGUAGE='JavaScript'>location.href='php-crud/crud-access-tutor.php';	</SCRIPT>";
    }
    
     else {
        echo '<p>No tienes un rol válido para acceder a esta página.</p>';
    }

    $conn->close();
?>