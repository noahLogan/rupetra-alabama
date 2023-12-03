<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
    <title>RupetraAlabama</title>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="Fg3EZc4w"></script>
    <div class="banner">
        <div class="blue">
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
            <div class="frase">
                "La educación es el arma más poderosa 
                <br> que puedes usar para cambiar el mundo." 
                <br><br><div class="frase--autor">- Nelson Mandela</div>
            </div>
        </div>
    </div>

    <main>
        <div class="flex gap-60 align-items-center">
            <!-- <img src="img/libros.png" alt="libros" width="400" height="300"> -->
            <div id="player"></div>
            <div class="flex flex-column gap-4">
            <div class="title">Modelo educativo</div>
                <div class="paragraph">
                Nuestro modelo educativo está estructurado para tener un enfoque planificado que establece cómo se enseñará y se aprenderá dentro de nuestro entorno educativo. Con el fin de guiar y organizar la enseñanza, establecer objetivos educativos, definir estrategias de aprendizaje, evaluar el progreso y proporcionar un marco coherente para la educación. En resumen, cómo se llevará a cabo la educación dentro del plantel.
                </div>
                <a href="rupetra-alabama/modelo-educativo.html">
                    <button class="button-standar">Ver más</button>
                </a>
            </div>
        </div>
    </main>
    <main class="flex flex-column gap-5">
        <div class="title text-center">Actividades extraescolares</div>
        <div class="flex justify-content-between">
            <div class="card-activities">
                <img src="img/deporte.jpg" class="card-activities__img">
                <div class="card-activities__title">Deporte</div>
            </div>
            <div class="card-activities">
                <img src="img/arte.jpg" class="card-activities__img">
                <div class="card-activities__title">Arte</div>
            </div>
            <div class="card-activities">
                <img src="img/cultura.jpg" class="card-activities__img">
                <div class="card-activities__title">Cultural</div>
            </div>
        </div>
        <a href="rupetra-alabama/actividades-extraescolares.html">
            <button class="button-standar margin-auto">Ver más</button>
        </a>
    </main>
    <div class="flex justify-content-center">
        <a href="rupetra-alabama/sobre-nosotros.html">
            <img src="img/us.jpg" class="us">
            <div class="title--us">Conoce más de Nosotros</div>
        </a>
    </div>

    <main>
        <!-- Para que los padres/madres de familia se regístren a la plataforma-->
        <div class="form-container--registro">
            <div class="form-container__info--w-100 flex flex-column gap-2">
                <div class="title text-center">¿Eres madre/padre del alumno?</div>
                <div class="paragraph text-center">Si no estás registrado(a) a la plataforma, entonces <b>¡regístrate!</b></div>
                <div class="paragraph text-center">Este espacio fue creado con el fin de que las madres y los padres de los alumnos de esta escuela puedan visualizar las calificaciones de sus niños/niñas.</div>
                <form id="frmregistrar" id="demo-form" class="grupo-entradas" method="POST" action="registrar.php">
                    <div class="flex pt-4">
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
                            <input type="text" class="cajaentradatexto" required name="txtrol" placeholder="Por favor colocar como palabra clave -> Tutor"><br>
                        </div>
                    </div>
                    <div class="checkboxvai check-style">
                        <input type="checkbox" class="checkbox-style">
                        <a href="rupetra-alabama/aviso-privacidad.html" class="form-container__terms">Acepto los términos y condiciones de uso.</a>
                    </div>
                    <button type="submit" class="button-17 g-recaptcha" data-sitekey="6Le9XA8pAAAAACR8PuPZBaXpHg7q4BcjvgKXchTC" data-callback='onSubmit' data-action='submit' name="btnregistrarx">Registrar</button>
                </form>
            </div>
        </div>
        <!-- API reCaptcha -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>
    </main>

    <!-- Script de API de Youtube -->
    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '300',
            width: '500',
            videoId: 'pdW6HzEurF0',
            position: 'center',
            events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
            }
        });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
        event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
        }
        function stopVideo() {
        player.stopVideo();
        }
    </script>

    <!-- API Disqus -->
    <main>
        <div id="disqus_thread"></div>
    </main>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://rupetraalabama.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    <script id="dsq-count-scr" src="//rupetraalabama.disqus.com/count.js" async></script>
    
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
                        <a href="https://www.facebook.com/?campaign_id=137675572948107&partner_id" class="footer-item">Facebook</a>
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