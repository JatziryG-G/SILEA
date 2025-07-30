<?php
include __DIR__ . '/../productos.php'; 
session_start();


// Validar si se recibe el ID por GET
if (!isset($_GET['id'])) {
    echo "Producto no especificado.";
    exit;
}

$id = intval($_GET['id']);
$producto = null;
foreach ($productos as $item) {
    if ($item['id'] === $id) {
        $producto = $item;
        break;
    }
}

if (!isset($_GET['id'])) {
    header('Location: shop.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SILEA | CESTA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
            <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">Preguntas</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Ayuda</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Sobre Nosotros</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>ILEA</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar productos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

     <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categorías</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Todo <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Ropa de mujer</a>
                                <a href="" class="dropdown-item">Accesorios</a>
                                <a href="" class="dropdown-item">Zapatos</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Partes Altas </a>
                        <a href="" class="nav-item nav-link">Partes Bajas </a>
                        <a href="" class="nav-item nav-link">Conjuntos</a>
                        <a href="" class="nav-item nav-link">Vestidos</a>
                        <a href="" class="nav-item nav-link">Faldas</a>
                        <a href="" class="nav-item nav-link">Descuentos</a>
                        <!--<a href="" class="nav-item nav-link"></a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>-->
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>ILEA</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Principal</a>
                            <a href="shop.php" class="nav-item nav-link active">Comprar</a>
                            <a href="detail.php" class="nav-item nav-link">Cesta</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Más</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Carrito</a>
                                    <a href="checkout.html" class="dropdown-item">Pago</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Iniciar sesíon</a>
                            <a href="" class="nav-item nav-link">Registrarse</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Cesta</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.html">Principal</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Detalles de compra</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->

        <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?= $producto['imagen'] ?>" alt="Imagen principal">
                        </div>
                        <?php foreach ($producto['imagenes'] as $img): ?>
                            <div class="carousel-item">
                                <img class="w-100 h-100" src="<?= $img ?>" alt="Imagen adicional">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?= htmlspecialchars($producto['nombre']) ?></h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reseñas)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">$<?= number_format($producto['precio'], 2) ?></h3>
                <p class="mb-4">Info de diseño: <?= $producto['descripción'] ?: 'No disponible.' ?></p>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">Ocasión:</li>
                            <li class="list-group-item px-0">Tipo de patrón:</li>
                            <li class="list-group-item px-0">Detalle de ropa:</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0"><?= $producto['detalles']['ocasion'] ?? '' ?></li>
                            <li class="list-group-item px-0"><?= $producto['detalles']['patron'] ?? '' ?></li>
                            <li class="list-group-item px-0"><?= $producto['detalles']['detalle ropa'] ?? '' ?></li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex mb-3 mt-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Tallas:</p>
                    <form>
                        <?php foreach (["XS","S","M","L","XL"] as $i => $talla): ?>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-<?= $i ?>" name="size">
                            <label class="custom-control-label" for="size-<?= $i ?>"><?= $talla ?></label>
                        </div>
                        <?php endforeach; ?>
                    </form>
                </div>

                <div class="d-flex mb-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Color:</p>
                    <form>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-1" name="color">
                            <label class="custom-control-label" for="color-1">Color Único</label>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3">
                        <i class="fa fa-shopping-cart mr-1"></i> Agregar al carrito
                    </button>
                </div>

                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Síguenos en:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="text-dark px-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="text-dark px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-dark px-2" href=""><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Descripción</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Información</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reseñas (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Acerca del Producto</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">Material:</li>
                                    <li class="list-group-item px-0">Composición:</li>
                                    <li class="list-group-item px-0">Estilo:</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0"><?= $producto['detalles']['material'] ?? '' ?></li>
                                    <li class="list-group-item px-0"><?= $producto['detalles']['composición'] ?? '' ?></li>
                                    <li class="list-group-item px-0"><?= $producto['detalles']['detalle ropa'] ?? '' ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Información Adicional</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">Ajuste:</li>
                                    <li class="list-group-item px-0">Cintura:</li>
                                    <li class="list-group-item px-0">Almohadilla:</li>
                                    <li class="list-group-item px-0">Longitud:</li>
                                    <li class="list-group-item px-0">Bolsillo:</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0"><?= $producto['detalles']['ajuste'] ?? '' ?></li>
                                    <li class="list-group-item px-0"><?= $producto['detalles']['cintura'] ?? '' ?></li>
                                    <li class="list-group-item px-0"><?= $producto['detalles']['almohadilla'] ?? '' ?></li>
                                    <li class="list-group-item px-0"><?= $producto['detalles']['longitud'] ?? '' ?></li>
                                    <li class="list-group-item px-0"><?= $producto['detalles']['bolsillo'] ?? '' ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <h4 class="mb-3">Reseñas</h4>
                        <p>Aún no hay reseñas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/Cesta_1.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/Cesta_2.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/Cesta_3.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/Cesta_4.jpg" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">Vestido Mini de Camiseta Vaquera Oversized con Corte</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">$780.00</h3>
                <p class="mb-4">Info de diseño: 
                </p>
                    <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Ocasión:
                                    </li>
                                    <li class="list-group-item px-0">
                                        Tipo de patron: 
                                    </li>
                                    <li class="list-group-item px-0">
                                        Detalle de ropa:
                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Informal diario
                                    </li>
                                    <li class="list-group-item px-0">
                                        Solido 
                                    </li> 
                                    <li class="list-group-item px-0">
                                        Bolsillo, Recortado
                                    </li> 
                                  </ul> 
                            </div>
                        </div>
                    </div>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                    <form>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-1" name="size">
                            <label class="custom-control-label" for="size-1">XS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-2" name="size">
                            <label class="custom-control-label" for="size-2">S</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-3" name="size">
                            <label class="custom-control-label" for="size-3">M</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-4" name="size">
                            <label class="custom-control-label" for="size-4">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-5" name="size">
                            <label class="custom-control-label" for="size-5">XL</label>
                        </div>
                    </form>
                </div>
                <div class="d-flex mb-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                    <form>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-1" name="color">
                            <label class="custom-control-label" for="color-1">Light Blue</label>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Agregar al carrito</button>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Siguenos en:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Descripción</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Información</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reseñas (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Acerca del Producto</h4>
                    <p>
                    </p>
                    <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Material:
                                    </li>
                                    <li class="list-group-item px-0">
                                        Composición: 
                                    </li>
                                    <li class="list-group-item px-0">
                                        Deets de estilo

                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Coquille
                                    </li>
                                    <li class="list-group-item px-0">
                                        84% Algodón 7% Poliéster 7% Viscosa 2% Lyocell                                    </li>
                                  </ul> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Informacion Adicional</h4>
                        <p>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Tipo de ajuste:
                                    </li>
                                    <li class="list-group-item px-0">
                                        Linea de Cintura: 
                                    </li>
                                    <li class="list-group-item px-0">
                                        Aalmodilla para el pecho:
                                    </li>
                                    <li class="list-group-item px-0">
                                        Longitud: 
                                    </li>
                                     <li class="list-group-item px-0">
                                        Bolsillo: 
                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Oversized
                                    </li>
                                    <li class="list-group-item px-0">
                                        Altura Media
                                    </li>
                                    <li class="list-group-item px-0">
                                        Sin relleno
                                    </li>
                                    <li class="list-group-item px-0">
                                        Corto
                                    </li>
                                     <li class="list-group-item px-0">
                                        Sí
                                    </li>
                                  </ul> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 reseña para "Vestido Mini de Camiseta Vaquera Oversized con Corte"</h4>
                                <div class="media mb-4">
                                    <img src="img/Perfil_Usuario.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>Pía Spirito<small> - <i>01 ENE 2025</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Lo pedí una talla más grande para poder usarlo con camisas o suéteres debajo, ¡y es exactamente lo que quería! Los bolsillos son agradables y profundos, ¡los pequeños detalles también están bien hechos!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Dejanos una Reseña</h4>
                                <small>Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con*</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Tu Calificación: *</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Tu Reseña: *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nombre *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Shop Detail End -->


    <!-- Products Start -->
    
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Podría Gustarte</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/PG_1.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Vestido Mini Oversize de Tejido Vaquero Sólido con Bolsillos</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$655.00</h6><h6 class="text-muted ml-2"><del>$655.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al Carrito</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/PG_2.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Romper de algodón con cuello cuadrado y estampado de cuadros y encaje</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$683.00</h6><h6 class="text-muted ml-2"><del>$683.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al Carrito</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/PG_3.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Vestido Mini Vaquero Cuello Redondo Sólido con Bolsillo y Botones</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$903.00</h6><h6 class="text-muted ml-2"><del>$903.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al Carrito</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/PG_4.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Chaleco Floral de Algodón 100% con Cuello en V Corto</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$853.00</h6><h6 class="text-muted ml-2"><del>$853.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al Carrito</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/PG_5.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Romper de camiseta vaquera sin espalda</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$485.00</h6><h6 class="text-muted ml-2"><del>$485.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Products End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">S</span>ILEA</h1>
                </a>
                <p>SILEA inspirada en la belleza del cambio, fusionamos siluetas suaves, detalles delicados y un espíritu libre que celebra lo que eres hoy y lo que estás por descubrir.</p>
                <p class="mb-2"><i class="fas fa-exclamation-circle text-primary mr-3"></i>Acerca de SILEA</p>
                <p class="mb-2"><i class="fas fa-bullhorn text-primary mr-3"></i>SILEA Club</p>
                <p class="mb-0"><i class="fas fa-hands-helping text-primary mr-3"></i>Sostenibilidad</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Ayuda</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" ><i class="fa fa-angle-right mr-2"></i>Envios y Entregas</a>
                            <a class="text-dark mb-2" ><i class="fa fa-angle-right mr-2"></i>Devoluciones y Entregas</a>
                            <a class="text-dark mb-2" ><i class="fa fa-angle-right mr-2"></i>Guias de Tallas</a>
                            <a class="text-dark mb-2"><i class="fa fa-angle-right mr-2"></i>Seguir Mi Pedido</a>
                            <a class="text-dark mb-2"><i class="fa fa-angle-right mr-2"></i>Formas de Pago</a>
                            <a class="text-dark" ><i class="fa fa-angle-right mr-2"></i>Soporte</a>
                        </div>
                    </div> 
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Enlaces</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Principal</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Nuestra tienda</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Sobre nosotros</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Carrito</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contactanos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Boletín</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Nombre" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">SILEA</a>. Todos los derechos reservados
                    por 
                    <a class="text-dark font-weight-semi-bold" href="https://www.instagram.com/meimportaunpomelo/">Jara G</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>