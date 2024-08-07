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
    <link rel="stylesheet" href="producto.css">
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
            <!-- Contenedor del producto -->
            <div class="contenedor-producto">
                <!-- Contenedor del carousel -->
                <div class="contenedor-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://ddtech.mx/assets/uploads/851c30986782e2d868f2c7376c2b728d.png"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://ddtech.mx/assets/uploads/784c95f80ffd99afbf95780857704c80.png"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://ddtech.mx/assets/uploads/07f6f8f28c4f77ef8d8729e8f942cb78.png"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- Contenedor de la descripcion -->
                <div class="contenedor-descripcion">
                    <h3 class="descripcion-title">
                        Computadora PRIDE MSI PRO WHITE
                    </h3>
                    <p class="descripcion-text">
                        AMD RYZEN 7 7700X / RTX 4070 / 32GB RAM / 1TB M.2 / ENF. Liquido 240mm / 650W 80+ Bronze
                    </p>
                    <p class="descripcion-price">
                        <strong>$31,999</strong>
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar al carrito
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Estado de la compra</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Su producto fue agregado al carrito de compras
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Ir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="equisde">
                <img src="https://ddtech.mx/assets/productos3/PC-PRIDE-MSI-PRO-WHITE-V3/PC-PRIDE-MSI-PRO-WHITE-V3.png" alt="">
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
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
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