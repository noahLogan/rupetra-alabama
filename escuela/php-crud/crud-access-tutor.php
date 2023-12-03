<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../global.css">
    <title>Profesor</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div>
                <a href="../index.php" class="header-logo">RupetraAlabama</a>
            </div>
            <div class="flex gap-30">
                <a href="modelo-educativo.html" class="header-item">Modelo educativo</a>
                <a href="actividades-extraescolares.html" class="header-item">Actividades extraescolares</a>
                <a href="sobre-nosotros.html" class="header-item">Sobre nosotros</a>
                <div class="flex header-item--container">
					<form method="post" action="../logout.php" class="flex-row">
						<img src="../icons/back-icon.svg" alt="back">
						<input type="submit" value="Cerrar Sesión" class="button-crud text-center logout">
					</form>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="title text-center p-5">Bienvenido Tutor</div>

            <!-- Lista de Calificaciones de alumnos -->
            <h3 class="aviso-p fs-4 pt-5 text-center">Calificaciones de los Alumnos</h3>
            <?php
                include ("crud-conection.php");

                $cadena="SELECT * FROM calificaciones";
                $run=mysqli_query($conn,$cadena);

                echo"<TABLE id='tlista' cellspacing='0'";

                echo"<tr>";
                echo"<th class='t-alumno'> Id </th>";
                echo"<th class='t-alumno'> Nombre </th>";
                echo"<th class='t-alumno'> Apellido </th>";
                echo"<th class='t-alumno'> Matemáticas </th>";
                echo"<th class='t-alumno'> Geografía </th>";
                echo"<th class='t-alumno'> Artes </th>";
                echo"<th class='t-alumno'> Ciencia </th>";
                echo"<th class='t-alumno'> Promedio </th>";
                echo"</tr>";

                echo"<tr scope='col'>";
                echo"<p>";

                while ($fila = mysqli_fetch_row($run)) 
                {
                    echo"<TR align=center>";
                    echo"<TD class='t-alumno'>".$fila['0']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['1']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['2']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['3']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['4']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['5']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['6']."</TD>";
                    echo"<TD class='t-alumno'>".$fila['7']."</TD>";
                    echo"</TR>";
                }

                echo "</p>";
                echo "</tr>";
                mysqli_close($conn);

                echo"</TABLE>";

            ?>	
	
        <div class="flex gap-1 mt-5">
            <img src="../icons/back-icon.svg" alt="back">
            <a href="../iniciar-sesion.php" class="back">Regresar</a>
        </div>
    </main>
    
    <footer>
        <a href="../index.php" class="header-logo text-white">RupetraAlabama</a>
        <div class="flex justify-content-between mt-4 gap-5">
            <div class="flex gap-5" style="width: 50%;">
                <div class="flex flex-column gap-3">
                    <a href="modelo-educativo.html" class="footer-item">Modelo educativo</a>
                    <a href="actividades-extraescolares.html" class="footer-item">Actividades extraescolares</a>
                    <a href="sobre-nosotros.html" class="footer-item">Sobre nosotros</a>
                </div>
                <div class="flex flex-column  gap-3">
                    <a href="../iniciar-sesion.php" class="footer-item">Iniciar sesión</a>
                    <a href="#" class="footer-item">Registrar</a>
                    <a href="aviso-privacidad.html" class="footer-item">Aviso de privacidad</a>
                </div>
            </div>
            <div class="flex gap-5" style="width: 50%; justify-content: right;">
                <div class="flex flex-column gap-3">
                    <div class="flex gap-2">
                        <img src="../icons/email.svg" alt="email">
                        <a href="#" class="footer-item">Correo</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="../icons/map.svg" alt="direction">
                        <a href="#" class="footer-item">Dirección</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="../icons/phone.svg" alt="phone">
                        <a href="#" class="footer-item">Teléfono</a>
                    </div>
                </div>
                <div class="flex flex-column gap-3">
                    <div class="flex gap-2">
                        <img src="../icons/facebook.svg" alt="facebook">
                        <a href="#" class="footer-item">Facebook</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="../icons/instagram.svg" alt="instagram">
                        <a href="#" class="footer-item">Instagram</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="../icons/twitter.svg" alt="twitter">
                        <a href="#" class="footer-item">Twitter</a>
                    </div>
                </div>
            </div>
        </div> 
    </footer>
    <div class="copy">&copy; RupetraAlabama 2023</div>


	<script src="../functions.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>