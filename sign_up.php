<?php 
    include("conection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="sign_up.css">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sign_up</title>
</head>

<body>
    <div class="contenedor-body">
        <!-- Contenedor para el header -->
        <header class="contenedor-header">
            <div class="icon">
                <a href="index.php" class="link">
                    <img src="https://i.pinimg.com/564x/26/43/3c/26433c7678cde0436cb7f74e1081e070.jpg" alt="">
                </a>
            </div>
        </header>

        <!-- Contenedor para el main -->
        <main class="contenedor-main">
            <!-- Contenedor para la imagen -->
            <div class="main-img">
                <img src="https://i.pinimg.com/564x/d2/74/b6/d274b6849641f33968d140aa4de32967.jpg" alt="">
            </div>
            <!-- Contenedor principal del Main -->
            <div class="main-signup">
                <!-- Contenedor del Formulario -->
                <div class="contenedor-forms">
                
                    <!-- Formulario -->
                    <form class="forms" method="post">
                        <h1>TECNOSALE</h1>
                        <input class="diseño-input" type="text" id="username" name="username" placeholder="Nombre de usuario"
                        aria-required="true" autocomplete="username">
                        <input class="diseño-input" type="text" name="name" id="name" placeholder="Nombre"
                            aria-required="true" autocomplete="given-name">
                        <input class="diseño-input" type="text" name="last_name" id="last_name" placeholder="Apellido"
                            aria-autocomplete="list" autocomplete="family-name">
                        <input class="diseño-input" type="password" id="password" name="password" placeholder="Contraseña"
                            aria-required="true" autocomplete="off">
                        <input type="submit" id="boton-registro" value="Registrarme">   
                    </form>
                </div>
                <!-- Contenedor para la opcion de inicio_sesion -->
                <div class="contenedor-sesion">
                    <p>¿Tienes una cuenta?</p>
                    <a href="log_in.php"><strong>Inicia Sesion</strong></a>
                </div>
                <!-- Contenedor de las redes sociales -->
                <div class="contenedor-redes">
                    <div class="redes-text">
                        <p>
                            <?php
		                        signup();
	                        ?>
                        </p>
                    </div>
                    <div class="redes-icons">
                        <a href="https://www.facebook.com/?locale=es_LA">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                    <div class="redes-icons">
                        <a href="https://www.instagram.com/">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    <div class="redes-icons">
                        <a href="https://twitter.com/">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Contenedor del footer -->
        <footer class="contenedor-footer">
            <div class="Terminos-Copyright">
                <a href="">Terminos y condiciones</a>
                <p>
                    TECNOSALE ©2024 Ricardo Sinecio
                </p>
            </div>

            <div class="Redes-sociales">
                <a href="https://www.facebook.com/?locale=es_LA"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com/"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
            </div>
            <div class="contenedor-contacto">
                <p>
                    Suc. Jardines
                    Av Niños Heroes 2749
                    Col. Jardines del Bosque
                    CP. 44520
                    Guadalajara, Jalisco, México
                </p>
                <p>
                    (33) 28 77 04 35
                </p>

                <a href="">
                    ventas@technosale.mx
                </a>
            </div>
        </footer>
    </div>
</body>

</html>