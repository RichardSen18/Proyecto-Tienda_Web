<?php 
    session_start();
	include("conection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Botstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="vip_style.css">
    <title>TecnoSale</title>
</head>

<body>
    <div class="contenedor-body">
        <!-- Contenedor para el header -->
        <header class="contenedor-header">
            <!-- Contenedor del icono -->
            <div class="icon">
                <a href="vip.php" class="link">
                    <img src="https://i.pinimg.com/564x/26/43/3c/26433c7678cde0436cb7f74e1081e070.jpg" alt="">
                </a>
            </div>
            <!-- Contenedor de la navbar -->
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="all_products.php">PRODUCTOS</a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/JHyRcUD6ThXytgQJ6">TIENDAS</a>
                    </li>
                    <li>
                        <a href="">CONOCENOS</a>
                    </li>
                </ul>
            </nav>
            <!-- Contenedor de acciones -->
            <div class="acciones">
                <form action="logout.php" method="post">
                    <input type="submit" class="cerrar_sesion_1" id="cerrar_sesion" value="Cerrar sesion">
                </form>
            </div>

            <!-- Contenedor del menu responsivo -->
            <div class="menu">
                <button class="btn btn-primary btn-menu" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="bi bi-list"></i>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="menu-navbar">
                            <a href="all_products.php">PRODUCTOS</a>
                            <a href="https://maps.app.goo.gl/JHyRcUD6ThXytgQJ6">TIENDAS</a>
                            <a href="">CONOCENOS</a>
                        </nav>
                        <div class="menu-register-button">
                            <form action="logout.php" method="post">
                                <input type="submit" class="cerrar_sesion" id="cerrar_sesion" value="Cerrar sesion">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Contenedor para el main -->
        <main class="contenedor-main">

            <div>
                TODOS LOS PRODUCTOS
            </div>

            <!-- Contenedor Cards de productos -->
            <div class="contenedor-cards">
                <!-- Card 1 -->
                <div class="card">
                    <img src="https://ddtech.mx/assets/uploads/d58b50f285d1f5a7a948fc9493ca250d.png"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">Gabinete HYTE Y40 MORI CALLIOPE </strong>
                        <a href="producto-1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <img src="https://ddtech.mx/assets/uploads/54e7d3bf03945b62cac0fb3785a3db23.png"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">Tarjeta de Video GIGABYTE RTX 4080 </strong>
                        <a href="producto-2.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <img src="https://ddtech.mx/assets/uploads/7f9893a6dd018b747d76d644bda3fdde.png"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">Monitor Asus TUF 24 VG24VQE 165Hz </strong>
                        <a href="producto-3.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card">
                    <img src="https://ddtech.mx/assets/uploads/cb5ad17f885f980e1b3169ee5cb4e1f0.png"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">Laptop Gamer MSI Vector GP68H</strong>
                        <a href="producto-4.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card">
                    <img src="https://ddtech.mx/assets/uploads/d427d3b63c658899d4d6e416c84efd3f.png"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">Teclado Mecanico NZXT Function 2</strong>
                        <a href="producto-5.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <!-- Card  6-->
                <div class="card">
                    <img src="https://ddtech.mx/assets/uploads/851c30986782e2d868f2c7376c2b728d.png"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">Computadora PRIDE MSI PRO WHITE</strong>
                        <a href="producto-6.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <!-- Card-->
                <div class="card">
                    <img src="https://i.pinimg.com/564x/a4/3e/e6/a43ee6d3e310564af22b71bdfb1a52e7.jpg"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">PROXIMAMENTE</strong>
                        <a href="" class="btn btn-primary disabled">Comprar</a>
                    </div>
                </div>
                <!-- Card-->
                <div class="card">
                    <img src="https://i.pinimg.com/564x/a4/3e/e6/a43ee6d3e310564af22b71bdfb1a52e7.jpg"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">PROXIMAMENTE</strong>
                        <a href="" class="btn btn-primary disabled">Comprar</a>
                    </div>
                </div>
                <!-- Card-->
                <div class="card">
                    <img src="https://i.pinimg.com/564x/a4/3e/e6/a43ee6d3e310564af22b71bdfb1a52e7.jpg"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">PROXIMAMENTE</strong>
                        <a href="" class="btn btn-primary disabled">Comprar</a>
                    </div>
                </div>
                <!-- Card-->
                <div class="card">
                    <img src="https://i.pinimg.com/564x/a4/3e/e6/a43ee6d3e310564af22b71bdfb1a52e7.jpg"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">PROXIMAMENTE</strong>
                        <a href="" class="btn btn-primary disabled">Comprar</a>
                    </div>
                </div>
                <!-- Card-->
                <div class="card">
                    <img src="https://i.pinimg.com/564x/a4/3e/e6/a43ee6d3e310564af22b71bdfb1a52e7.jpg"
                        class="card-img-top" alt="...">
                    <!-- Body de la card -->
                    <div class="card-body">
                        <strong class="card-title">PROXIMAMENTE</strong>
                        <a href="" class="btn btn-primary disabled">Comprar</a>
                    </div>
                </div>

            </div>
        </main>

        <!-- Contenedor del footer -->
        <footer class="contenedor-footer">
            <div class="Terminos-Copyright">
                <a href="https://terminosya.com/generador-terminos-y-condiciones?gad_source=1&gclid=Cj0KCQjwwYSwBhDcARIsAOyL0fjB0sCYoeWj51cEf0dZtyL9fehzhBgB8fs-LAZf9lXahPP6ZH8jmPEaAm4qEALw_wcB">Terminos y condiciones</a>
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

                <a href="mailto:ventas@technosale.mx">
                    ventas@technosale.mx
                </a>
            </div>
        </footer>
    </div>
</body>

</html>