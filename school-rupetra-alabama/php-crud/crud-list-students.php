<? include('../login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../global.css">
    <title>Administrador</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div>
                <a href="../index.php" class="header-logo">RupetraAlabama</a>
            </div>
            <div class="flex gap-30 align-items-center">
                <a href="modelo-educativo.html" class="header-item">Modelo educativo</a>
                <a href="actividades-extraescolares.html" class="header-item">Actividades extraescolares</a>
                <a href="sobre-nosotros.html" class="header-item">Sobre nosotros</a>
                <div class="flex header-item--container">
                    <!--<a href="../iniciar-sesion.php" class="header-item">Iniciar sesión/Registrar</a>-->
					<form method="post" action="../logout.php" class="flex-row">
						<img src="../icons/back-icon.svg" alt="back">
						<input type="submit" value="Cerrar Sesión" class="button-crud text-center logout">
					</form>
                </div>
            </div>
        </div>
    </header>

    <main>
    <div class="title text-center p-5">Bienvenido Administrador <?echo '$username';?></div>

	<p class="text-center">Da click a algún ícono para mostrar la lista de información que deseas ver.</p>

	<!-- Hacer cards para cada rol -->
	<div class="flex justify-content-around pt-4">
		<a onclick="mostrarProfesores();" class="card-rol__a">
			<div class="card-rol flex flex-column justify-content-center text-center gap-3">
				<img src="../icons/briefcase.svg" class="card-rol__img">
				<p><b>Lista profesores</b></p>
			</div>
		</a>
		<a onclick="mostrarAlumnos();" class="card-rol__a">
			<div class="card-rol flex flex-column justify-content-center text-center gap-3">
				<img src="../icons/school.svg" class="card-rol__img">
				<p><b>Lista Alumnos</b></p>
			</div>
		</a>
		<a onclick="mostrarTutores();" class="card-rol__a">
			<div class="card-rol flex flex-column justify-content-center text-center gap-3">
				<img src="../icons/home.svg" class="card-rol__img">
				<p><b>Lista tutores</b></p>
			</div>
		</a>
	</div>

	<!-- Lista Profesores -->
	<div id="profesores" style="display: none;">
		<h3 class="aviso-p fs-4 pt-5 text-center">Lista de Profesores</h3>
		<?php
			include ("crud-conection.php");

			$cadena="SELECT * FROM usuarios WHERE rol= 'profesor'";
			$run=mysqli_query($conn,$cadena);

			echo"<TABLE id='tlista' cellspacing='0'";

			echo"<tr>";
			echo"<th class='t-alumno'> Id </th>";
			echo"<th class='t-alumno'> Correo </th>";
			echo"<th class='t-alumno'> User </th>";
			echo"<th class='t-alumno'> Rol </th>";
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
				//echo"<TD class='t-alumno'>".$fila['4']."</TD>";
				echo"</TR>";
			}

			echo "</p>";
			echo "</tr>";
			mysqli_close($conn);

			echo"</TABLE>";

		?>
		<center>
			<a class="a__registro button-17 mt-5" onclick="ocultarProfesores();">Cerrar lista de profesores</a>
		</center>
	</div>

	<!-- Lista Alumnos -->
	<div id="alumnos" style="display: none;">
		<h3 class="aviso-p fs-4 pt-5 text-center">Lista de Alumnos</h3>
		<?php
			include ("crud-conection.php");

			$cadena="SELECT * FROM alumnos";
			$run=mysqli_query($conn,$cadena);

			echo"<TABLE id='tlista' cellspacing='0'";

			echo"<tr>";
			echo"<th class='t-alumno'> Id </th>";
			echo"<th class='t-alumno'> Nombre </th>";
			echo"<th class='t-alumno'> Apellido </th>";
			echo"<th class='t-alumno'> Tutor </th>";
			echo"<th class='t-alumno'> Edad </th>";
			echo"<th class='t-alumno'> Fecha nacimiento </th>";
			echo"<th class='t-alumno'> Dirección </th>";
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
				echo"</TR>";
			}

			echo "</p>";
			echo "</tr>";
			mysqli_close($conn);

			echo"</TABLE>";

		?>

		<div class="flex flex-column">
			<div class="flex justify-content-around p-5">
				<button class="button-crud" onclick="mostrarRegistroAlumnos();">Insertar Alumnos</button>
				<button class="button-crud" onclick="mostrarActualizarAlumnos();">Actualizar Datos de Alumnos</button>
				<button class="button-crud" onclick="mostrarEliminarAlumnos();">Eliminar Alumno</button>
			</div>

			<!--Formulario para registrar Alumno -->
			<div id="alumnosRegistro" style="display: none;">
				<div class="form-container--registro">
					<div class="form-container__info--w-100">
						<h2>Regístrar alumno</h2><br>
						<form id="frmregistrar" class="grupo-entradas" method="POST" action="crud-registrar.php">
							<div class="flex">
								<div class="w-50">
									<label for="text" class="form-container__label">Nombre(s):</label>
									<input type="text" class="cajaentradatexto" required name="name-student" placeholder="nombre"><br>
									<label for="text" class="form-container__label">Apellido(s):</label>
									<input type="text" class="cajaentradatexto" required name="lastname-student" placeholder="apellido"><br>
								</div>
								<div class="w-50">
									<label for="text" class="form-container__label">Tutor:</label>
									<input type="text" class="cajaentradatexto" required name="tutor-student" placeholder="user del tutor"><br>
									<label for="number" class="form-container__label">Edad:</label>
									<input type="number" class="cajaentradatexto" required name="edad-student"><br>
								</div>
							</div>
							<div class="flex">
								<div class="w-50">
									<label for="date" class="form-container__label">Fecha de nacimiento:</label>
									<input type="date" class="cajaentradatexto" required name="fecha-nacimiento-student"><br>
								</div>
								<div class="w-50">
									<label for="text" class="form-container__label">Dirección:</label>
									<input type="text" class="cajaentradatexto" required name="direccion-student" placeholder="no.8888"><br>
								</div>
							</div>
							<div class="checkboxvai check-style">
								<input type="checkbox" class="checkbox-style">
								<p class="form-container__terms">Acepto los términos y condiciones de uso.</p>
							</div>
							<button type="submit" class="button-17" name="btnregistrarx">Registrar</button>
						</form>
					</div>
				</div>
				<button class="button-crud" onclick="ocultarRegistroAlumnos();">Cerrar Registro de Alumno</button>
			</div>

			<!-- Formulario para Actualizar info de Alumno -->
			<div id="alumnosActualizar" style="display: none;">
				<p class="text-center">Por favor llenar todos losa campos, los que no se modifican dejarlos ingresarlos igual, y los que sí, ingresar los que se deseean modificar.</p>
				<form action="crud-update-function.php" method="post">
					<center>
						<table class="update-alumnos" border="1" align="center">
							<tr> 
								<td class="left"> 
									<label for="idlista">Id *</label> 
								</td> 
								<td class="right"> 
									<input type="text" name="idlista" id="idlista" required> 
								</td> 
							</tr>
							
							<tr> 
								<td class="left"> 
									<label for="nombrenuevo">Nombre del alumno *</label> 
								</td> 
								<td class="right"> 
									<input type="text" name="nombrenuevo" maxlength="50" size="30" id="nombre"> 
								</td> 
							</tr>

							<tr> 
								<td class="left"> 
									<label for="apellidonuevo">Apellido del alumno *</label> 
								</td> 
								<td class="right"> 
									<input type="text" name="apellidonuevo" maxlength="50" size="30" id="apellido"> 
								</td> 
							</tr>

							<tr> 
								<td class="left"> 
									<label for="tutornuevo">Tutor del alumno *</label> 
								</td> 
								<td class="right"> 
									<input type="text" name="tutornuevo" maxlength="50" size="30" id="tutor"> 
								</td> 
							</tr>

							<tr> 
								<td class="left"> 
									<label for="edadnuevo">Edad del alumno *</label> 
								</td> 
								<td class="right"> 
									<input type="number" name="edadnuevo" maxlength="50" size="30" id="edad"> 
								</td> 
							</tr>

							<tr> 
								<td class="left"> 
									<label for="fechannuevo">Fecha de nacimiento del alumno *</label> 
								</td> 
								<td class="right"> 
									<input type="date" name="fechannuevo" maxlength="50" size="30" id="fechan"> 
								</td> 
							</tr>
							<tr> 
								<td class="left"> 
									<label for="direccionnuevo">Dirección del alumno *</label> 
								</td> 
								<td class="right"> 
									<input type="text" name="direccionnuevo" maxlength="50" size="30" id="direccion"> 
								</td> 
							</tr>
							
							<tr>
								<td colspan="2" align="center" valign="middle">
									<button class="button-crud" name="actualizar" type="submit" id="actualizar" value="Actualizar registro" onclick="mensaje()">
										Actualizar registro								
									</button>
								</td>
							</tr>    
						</table>
						
						<script type='text/javascript'>function mensaje() {alert('Registro actualizado exitosamente.');}
						</script>					
					</center>
				</form>
				<button class="button-crud" onclick="ocultarActualizarAlumnos();">Cerrar Actualización de Alumno</button>
			</div>
			
			<div id="alumnosEliminar" style="display: none;">
				<!-- Formulario Eliminar Alumno-->
				<form action="crud-delete-function.php" method="post">
					<center>
						<table class="update-alumnos" border="1" align="center">
							<tr>
								<td width="117">ID del registro a eliminar: </td>
								<td width="67">
									<label>
										<?php
											include("crud-conection.php");
										?>
										<select name="regelimina" id="regelimina">
											<!-- <option value="Selecciona registro">Selecciona registro</option> -->
				
											<?php
												$cadena="SELECT * FROM alumnos";
												$run=mysqli_query($conn,$cadena);
												while($fila = mysqli_fetch_array($run))
												{
													echo"<option value=".$fila['id'].">".$fila['id']."</option>"; 
												}
												mysqli_close($conn);
											?>
										</select>
									</label>
								</td>
							</tr>
							
							<tr>
								<td colspan="2" align="center" valign="middle">
									<button class="button-crud" name="eliminar" type="submit" id="eliminar" value="Eliminar">
										Eliminar
									</button>
								</td>
							</tr>    
						</table>
					</center>
				</form>
				<button class="button-crud" onclick="ocultarEliminarAlumnos();">Cerrar Eliminación de Alumno</button>
			</div>


			<a href="#" class="a__registro button-17" onclick="ocultarAlumnos();">Cerrar lista de alumnos</a>
		</div>
	</div>
		
	<!-- Lista Tutores -->
	<div id="tutores" style="display: none;">
		<h3 class="aviso-p fs-4 pt-5 text-center">Lista de Tutores</h3>
		<?php
			include ("crud-conection.php");

			$cadena="SELECT * FROM usuarios WHERE rol= 'tutor'";
			$run=mysqli_query($conn,$cadena);

			echo"<TABLE id='tlista' cellspacing='0'";

			echo"<tr>";
			echo"<th class='t-alumno'> Id </th>";
			echo"<th class='t-alumno'> Correo </th>";
			echo"<th class='t-alumno'> User </th>";
			echo"<th class='t-alumno'> Rol </th>";
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
				//echo"<TD class='t-alumno'>".$fila['4']."</TD>";
				echo"</TR>";
			}

			echo "</p>";
			echo "</tr>";
			mysqli_close($conn);

			echo"</TABLE>";

		?>
		<center>
			<a class="a__registro button-17 mt-5" onclick="ocultarTutores();">Cerrar lista de profesores</a>
		</center>
	</div>

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