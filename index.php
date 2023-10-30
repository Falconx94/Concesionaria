<?php require('layout/header.php') ?>
  </div>
</div>
<main>
  <!--Sección Banner-->
  <section class="Portada main-banner">
    <div class="container">
      <div class="row row-cols-2 banner">
        <div class="col">
          <h3>LO MAS NUEVO</h3>
          <h4>PickUp</h4>
          <p>Descubre el nuevo modelo PickUp, un automóvil que combina potencia,
            estilo y comodidad. Diseñado con las últimas tecnologías para ofrecerte
            una experiencia de conducción única. Con un motor eficiente que te
            brinda un rendimiento excepcional en cada viaje, este PickUp está hecho
            para los aventureros urbanos y los amantes de la carretera. Su interior
            espacioso y lujoso te proporciona la comodidad que mereces, mientras
            que su diseño exterior elegante y aerodinámico garantiza que siempre
            te destaques en la carretera. No comprometas la calidad ni el estilo:
            elige nuestro PickUp y experimenta la verdadera libertad de conducir!.
          </p>
        </div>
        <div class="col imagen-banner">
          <img id="banner-image" src="images/PickUp.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion de promociones-->
  <section class="Promociones">
    <div class="container">
      <div class="row row-cols promos">
        <H3>Conoce nuestros nuevos vehiculos</H3>
        <!--Promo 1-->
        <div class="col promo">
          <div class="imagen-promos">
            <img src="images/Autos.jpg" alt="">
          </div>
          <h3>Vehiculos</h3>
          <p>
            "Explora nuestra gama de vehículos de última generación, diseñados para
            ofrecerte comodidad, estilo y rendimiento. Desde elegantes sedanes hasta
            potentes SUVs, encuentra el vehículo perfecto para tu estilo de vida." </p>
          <p class="precio">
            $500,000.00
          </p>
          <button class="carrito gradient-button btn-user">AGREGAR A CARRITO</button>
          <button class="comprar gradient-button btn-user">Compra inmediata</button>
        </div>
        <!--Promo 2-->
        <div class="col promo">
          <div class="imagen-promos">
            <img src="images/Suvs.jpg" alt="">
          </div>
          <h3>Subs del año</h3>
          <p>
            "Subcompactos del Año: Pequeños en Tamaño, Grandes en Prestaciones"
            Texto: "Conoce nuestros galardonados subcompactos del año. Estos vehículos están
            redefiniendo la forma en que vemos la eficiencia y el estilo. Descubre tecnología
            innovadora, manejo ágil y un diseño moderno, todo en un paquete compacto." </p>
          <p class="precio">
            $785,000.00
          </p>
          <button class="carrito gradient-button btn-user">AGREGAR A CARRITO</button>
          <button class="comprar gradient-button btn-user">Compra inmediata</button>
        </div>
        <!--Promo 3-->
        <div class="col promo">
          <div class="imagen-promos">
            <img src="images/Hibrido.jpg" alt="">
          </div>
          <h3>Nuestro mejores HIBRIDOS</h3>
          <p>
            "Experimenta la revolución de la conducción con nuestros mejores híbridos.
            Estos vehículos no solo ofrecen un rendimiento excepcional, sino que también
            son amigables con el medio ambiente. Descubre una combinación perfecta entre
            potencia, eficiencia y ecología." </p>
          <p class="precio">
            $2,3450,000.00
          </p>
          <button class="carrito gradient-button btn-user">AGREGAR A CARRITO</button>
          <button class="comprar gradient-button btn-user">Compra inmediata</button>
        </div>
  </section>
  <!--Sección de Servicios-->
  <section class="servicios">
    <div class="row">
      <div class="col">
        <h2>Estrena el Auto o Camioneta que siempre has deseado</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-Servicio">
        <h4>
          Cotiza
        </h4>
        <img src="images/cotiza.png" alt="" width="10vw" background-position="center" margin="0 auto">
        <p>"Obtén una cotización personalizada para tu nuevo auto"</p>
      </div>
      <div class="col-Servicio">
        <h4>Financiamiento</h4>
        <img src="images/contrato.png" alt="" width="10vw" background-position="center" margin="0 auto">
        <p>"Obtén el financiamiento que necesitas para comprar tu auto"</p>
      </div>
      <div class="col-Servicio">
        <h4>Nuestras Franquicias</h4>
        <img src="images/mapa.png" alt="" width="10vw" background-position="center" margin="0 auto">
        <p>"Encuentra una franquicia cerca de ti"</p>
      </div>
      <div class="col-Servicio">
        <h4>Cita de servicios</h4>
        <img src="images/cita.png" alt="" width="10vw" background-position="center" margin="0 auto">
        <p>"Programa una cita de servicios y mantén tu auto en óptimas condiciones"</p>

      </div>
    </div>
  </section>
  
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/banner-picks.js"></script>
  <script src="js/script.js"></script>
</main>
</body>
</html>
<?php require ('layout/Footer.php') ?>