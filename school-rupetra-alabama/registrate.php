<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div>
                <a href="index.php" class="header-logo">RupetraAlabama</a>
            </div>
            <div class="flex gap-30">
                <a href="rupetra-alabama/modelo-educativo.html" class="header-item">Modelo educativo</a>
                <a href="rupetra-alabama/actividades-extraescolares.html" class="header-item">Actividades extraescolares</a>
                <a href="rupetra-alabama/sobre-nosotros.html" class="header-item">Sobre nosotros</a>
                <div class="flex header-item--container">
                    <img src="icons/user.svg" alt="user">
                    <a href="iniciar-sesion.php" class="header-item">Iniciar sesión/Registrar</a>
                </div>
            </div>
        </div>
    </header>

    <div class="pt-5">
        <h1 class="pt-5 title">¡Regístrate!</h1>
    </d>

    <!--Formulario para registrar -->
    <div class="form-container--registro">
        <div class="form-container__info--w-100">
            <form id="frmregistrar" class="grupo-entradas" method="POST" action="registrar.php">
                <div class="flex">
                    <div class="w-50">
                        <label for="email" class="form-container__label">Correo:</label>
                        <input type="email" class="cajaentradatexto" required name="txtcorreo" placeholder="email@example.com"><br>
                        <label for="password" class="form-container__label">Contraseña:</label>
                        <input type="password" class="cajaentradatexto" required name="txtpassword" placeholder="***"><br>
                    </div>
                    <div class="w-50">
                        <label for="text" class="form-container__label">Nombre:</label>
                        <input type="text" class="cajaentradatexto" required name="txtnombre" placeholder="user999"><br>
                        <label for="text" class="form-container__label">Rol:</label>
                        <input type="text" class="cajaentradatexto" required name="txtrol" placeholder="admin, profesor o tutor"><br>
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

    <div class="flex gap-1 m-5">
        <img src="icons/back-icon.svg" alt="back">
        <a href="iniciar-sesion.php" class="back">Regresar</a>
    </div>

    <script>
            function abrirform() {
            document.getElementById("formrecuperar").style.display = "block";
        }

        function cancelarform() {
            document.getElementById("formrecuperar").style.display = "none";
        }
    </script>


    <div class="caja_popup" id="formrecuperar">
        <form action="recuperar.php" class="contenedor_popup" method="POST">
            <table class="formrecuperar__table">
                <tr class="formrecuperar__tr">
                    <th colspan="2" class="formrecuperar__th">Recuperar contraseña</th>
                </tr>
                <tr class="formrecuperar__tr">
                    <td class="formrecuperar__td">
                        <p class="formrecuperar__p">&#128231; Correo</p>
                    </td>
                    <td class="formrecuperar__td">
                        <input type="email" name="txtcorreo" required class="cajaentradatexto">
                    </td>
                </tr class="formrecuperar__tr">
                <tr class="formrecuperar__tr">
                    <td colspan="2" class="formrecuperar__td">
                        <button type="button" onclick="cancelarform()" class="txtrecuperar">Cancelar</button>
                        <input class="txtrecuperar" type="submit" name="btnrecuperar" value="Enviar" onClick="javascript: return confirm('¿Deseas enviar tu contraseña a tu correo?');">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
    <footer>
        <a href="index.php" class="header-logo text-white">RupetraAlabama</a>
        <div class="flex justify-content-between mt-4 gap-5">
            <div class="flex gap-5" style="width: 50%;">
                <div class="flex flex-column gap-3">
                    <a href="rupetra-alabama/modelo-educativo.html" class="footer-item">Modelo educativo</a>
                    <a href="rupetra-alabama/actividades-extraescolares.html" class="footer-item">Actividades extraescolares</a>
                    <a href="rupetra-alabama/sobre-nosotros.html" class="footer-item">Sobre nosotros</a>
                </div>
                <div class="flex flex-column  gap-3">
                    <a href="iniciar-sesion.php" class="footer-item">Iniciar sesión</a>
                    <a href="#" class="footer-item">Registrar</a>
                    <a href="rupetra-alabama/aviso-privacidad.html" class="footer-item">Aviso de privacidad</a>
                </div>
            </div>
            <div class="flex gap-5" style="width: 50%; justify-content: right;">
                <div class="flex flex-column gap-3">
                    <div class="flex gap-2">
                        <img src="icons/email.svg" alt="email">
                        <a href="#" class="footer-item">Correo</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="icons/map.svg" alt="direction">
                        <a href="#" class="footer-item">Dirección</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="icons/phone.svg" alt="phone">
                        <a href="#" class="footer-item">Teléfono</a>
                    </div>
                </div>
                <div class="flex flex-column gap-3">
                    <div class="flex gap-2">
                        <img src="icons/facebook.svg" alt="facebook">
                        <a href="#" class="footer-item">Facebook</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="icons/instagram.svg" alt="instagram">
                        <a href="#" class="footer-item">Instagram</a>
                    </div>
                    <div class="flex gap-2">
                        <img src="icons/twitter.svg" alt="twitter">
                        <a href="#" class="footer-item">Twitter</a>
                    </div>
                </div>
            </div>
        </div> 
    </footer>
    <div class="copy">&copy; RupetraAlabama 2023</div>
</body>
</html>