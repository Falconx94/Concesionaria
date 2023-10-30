<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg" href="../images/favicon.png">
  <link rel="stylesheet" href="../css/servicios.css">
  <link rel="stylesheet" href="../css/promos.css">
  <link rel="stylesheet" href="../css/banner.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/us-style.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../images/ROYALRHILLS.jpg">
  <title>Concecionario</title>

</head>

<body>
  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="header" style="width: 100%; "><!--BOTON LOGO INICIO-->
        <a href="../index.php" class="Icon_Main d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="../images/ROYALRHILLS.jpg" alt="">
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li> <!--Nosotros-->
            <a href="../Paginas/nosotros.php" class="nav-link px-2 text-white" data-bs-toggle="">
              SOBRE NOSOTROS
            </a>
          </li>
          <li class="nav-item dropdown"><!--Vehiculos-->
            <a class="nav-link px-2 text-white dropdown-toggle" href="#" id="vehiculosDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Vehículos
            </a>
            <ul class="dropdown-menu" aria-labelledby="vehiculosDropdown">
              <li><!--AUTOS-->
                <a class="dropdown-item" href="#">
                  AUTOS
                </a>
              </li>
              <li><!--HIBRIDOS-->
                <a class="dropdown-item" href="#">
                  HIBRIDOS ELECTRICOS
                </a>
              </li>
              <li><!--SUV-->
                <a class="dropdown-item" href="#">
                  SUV'S MINIVANS
                </a>
              </li>
              <li><!--PICK UP / CAMIONETAS-->
                <a class="dropdown-item" href="#">
                  PICK UP'S & COMERCIALES
                </a>
              </li>
            </ul>
          </li>
          <li> <!--Accesorios-->
            <a href="" class="nav-link px-2 text-white">
              Accesorios
            </a>
          </li>
          <li><!--Franquicias-->
            <a href="#" class="nav-link px-2 text-white">
              Franquicias
            </a>
          </li>
          <li><!--Soporte-->
            <a href="../Caracteristicas/soporte.php" class="nav-link px-2 text-white">
              Soporte técnico
            </a>
          </li>
          <li><!--Contacto-->
            <a href="#footer" class="nav-link px-2 text-white">
              Contacto
            </a>
          </li>
          <li><!--QA-->
            <a href="../Paginas/preguntas.php" class="nav-link px-2 text-white">
              Preguntas Frecuentes
            </a>
          </li>
          <li><!--Carrito-->
            <a href="../Paginas/carrito.php"
              class="Icon_Cart d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="../images/carrito.jpg">
              <!--<span class="cart-counter"></span>-->
            </a>
          </li>
        </ul>
        <div class="text-end">
          <!-- Botón login con redirección usando submit -->
          <form action="LOGIN.html" method="post">
              <button type="submit" class="btn btn-outline-light me-2">
                  Login
              </button>
          </form>
      </div>
      
      <div class="search">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <i class="fas fa-search"></i>
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
            aria-label="Search">
        </form>
      </div>
    </div>
  </header>