<?php
    session_start();
    
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "rupetraalabama";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
        $result = $conn->query($query);
    

        if (empty($username) || empty($password)) {
            echo "Por favor, complete todos los campos.";
        } 
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["username"] = $username;
            $_SESSION["rol"] = $row["rol"];
            header("Location: sesiones.php");
        } else {
            echo "<SCRIPT LANGUAGE='JavaScript'>location.href='rupetra-alabama/no-access.html';</SCRIPT>";
        }
    }

    $conn->close();
?>
