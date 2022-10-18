<?php include './assets/php/layout/head.php'; ?>
<?php include './assets/php/layout/header.php'; ?>

<main>
  <!-- ::: Hero ::: -->
  <section class="splide marginBottom-7" id="splide-slider">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="./assets/img/hero/hero-cake.png" alt="pastel de frutas con kiwi y fresa" />
          <div class="slider-hero__content">
            <h3 class="slider-hero__title">La mejor pastelería a unos pasos de ti</h3>
            <a href="./productos.php" class="slider-hero__btn">Nuestros productos</a>
          </div>
        </li>
        <li class="splide__slide">
          <img src="./assets/img/hero/hero-cupcakes.png" alt="soportes con variedad de cupcakes" />
          <div class="slider-hero__content">
            <h3 class="slider-hero__title">Tenemos una sucursal cerca de ti</h3>
            <a href="./contacto.php" class="slider-hero__btn">Ver ubicaciones</a>
          </div>
        </li>
        <li class="splide__slide">
          <img src="./assets/img/hero/hero-pay.png" alt="pays de frutos rojos" />
          <div class="slider-hero__content">
            <h3 class="slider-hero__title">Surte tu negocio con nuestros productos</h3>
            <a href="./contacto.php" class="slider-hero__btn">Contacto</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div class="container">
    <!-- ::: About ::: -->
    <section class="grid grid-md-2 marginBottom-7">
      <div class="alignSelf-center">
        <h2 class="fontSize-5 decorated-title marginBottom-4">Pastelería artesanal 100% mexicana</h2>
        <p class="textAlign-center">
          Pastelería y Panadería Quality Bakery es una empresa mexicana dedicada a la pastelería artesanal, que
          fusiona el sabor franco-americano con la tradicional pastelería
          mexicana. Abrió sus puertas en el año 1997 y desde entonces ofrece los mejores productos con la más alta
          calidad.
        </p>
      </div>

      <img src="./assets/img/collage.png" alt="collage de fotos de pasteles y cupcakes" />
    </section>

    <!-- ::: Services ::: -->
    <section class="marginBottom-7">
      <h2 class="decorated-title fontSize-5 marginBottom-6">Nuestros servicios</h2>

      <ul class="inline-list grid grid-md-2 grid-lg-4 textAlign-center">
        <li class="feature">
          <img class="feature__image" src="./assets/img/cake.png" alt="pastel dibujado a mano con cerezas encima" />

          <div class="feature__content">
            <div class="flex flex-centered" data-bakery="feature-title">
              <h3 class="feature__title">Pastelería</h3>
            </div>
            <p>En las pasterías Quality Bakery tenemos mejores pasteles y postres artesanales. ¡No te lo puedes
              perder!</p>
          </div>

          <a href="#" class="feature__btn btn btn-outline--grey" aria-label="Ir a catálogo de pasteles"><i
              class="fa-fw fa-sharp fa-solid fa-plus"></i></a>
        </li>

        <li class="feature">
          <img class="feature__image" src="./assets/img/croissant.png" alt="croissant dibujado a mano" />

          <div class="feature__content">
            <div class="flex flex-centered" data-bakery="feature-title">
              <h3 class="feature__title">Panadería</h3>
            </div>
            <p>Encontra el mejor pan recién horneado, la mayor variedad de panes dulces o simplemente tu pan
              tradicional de siempre.</p>
          </div>

          <a href="#" class="feature__btn btn btn-outline--grey" aria-label="Ir a catálogo de panadería"><i
              class="fa-fw fa-sharp fa-solid fa-plus"></i></a>
        </li>

        <li class="feature">
          <img class="feature__image" src="./assets/img/party.png" alt="cono de fiesta dibujado a mano" />

          <div class="feature__content">
            <div class="flex flex-centered" data-bakery="feature-title">
              <h3 class="feature__title">Eventos</h3>
            </div>
            <p>Haz que tu gran día se convierta en una deliciosa realidad. Personaliza tus fiestas con la mejor
              selección de pasteles.</p>
          </div>

          <a href="#" class="feature__btn btn btn-outline--grey" aria-label="Ir a catálogo de eventos"><i
              class="fa-fw fa-sharp fa-solid fa-plus"></i></a>
        </li>

        <li class="feature">
          <img class="feature__image" src="./assets/img/delivery.png" alt="camión de entregas dibujado a mano" />

          <div class="feature__content">
            <div class="flex flex-centered" data-bakery="feature-title">
              <h3 class="feature__title">Servicio a domicilio</h3>
            </div>
            <p>Servicio de entrega a domicilio, negocio o trabajo. Contamos con 7 sucursales distribuidas por toda la
              ciudad.</p>
          </div>

          <a href="#" class="feature__btn btn btn-outline--grey" aria-label="Ir a detalles de entrega a domicilio"><i
              class="fa-fw fa-sharp fa-solid fa-plus"></i></a>
        </li>
      </ul>
    </section>
  </div>

  <!-- ::: Gallery ::: -->
  <div class="splide marginBottom-7" id="splide-gallery">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="./assets/img/gallery/cupcake-de-chocolate.png" alt="cupcake con chocolate ferrero rocher" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/donas-glaseadas.png" alt="caja de cartón con donas glaseadas" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/estante-con-pasteles.png" alt="exhibidor con pasteles de diferentes sabores" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/estante-de-panaderia.png" alt="estante con pan de diferentes tipos" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/galletas-navideñas.png" alt="galletas navideñas" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/croissant.png" alt="croissants" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/roles-de-canela.png" alt="roles de canela espolvoreados con azúcar glass" />
        </li>
        <li class="splide__slide">
          <img src="./assets/img/gallery/pastel-de-chocolate.png"
            alt="pastel de chocolate con decoración de merengue" />
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <!-- ::: Contact ::: -->
    <section class="grid grid-md-2 marginBottom-7">
      <figure class="testimonial text-white">
        <div>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
        </div>
        <blockquote>
          <p class="fontSize-2">“Mis pedidos siempre llegan a tiempo y en perfecto estado. Quality Bakery es un
            excelente proveedor y mis clientes quedan encantados.”</p>
        </blockquote>

        <figcaption>
          <img class="testimonial__img" src="./assets/img/avatar.png" alt="" />
          <p class="font-secondary">Adriana Hernández</p>
          <p class="uppercase fontSize-1">Cliente</p>
        </figcaption>
      </figure>

      <div>
        <h2 class="decorated-title marginBottom-5 fontSize-4">Tenemos la solución que buscas</h2>
        <p class="marginBottom-3">Surte tu restaurante con productos de primera calidad a un precio exclusivo. Ponte
          en contacto con nosotros.</p>

        <form action="">
          <div class="form-field marginBottom-2">
            <label for="mail" class="form-field__label">Correo electrónico</label>
            <input class="form-field__input" type="email" name="" id="mail" />
          </div>

          <div class="form-field marginBottom-2">
            <label for="subject" class="form-field__label">Asunto</label>
            <input class="form-field__input" type="text" name="" id="subject" />
          </div>

          <div class="form-field marginBottom-2">
            <label for="message" class="form-field__label">Mensaje</label>
            <textarea class="form-field__input" name="" id="message"></textarea>
          </div>

          <div class="textAlign-center">
            <button class="btn btn-orange btn-padding-md">Enviar</button>
          </div>
        </form>
      </div>
    </section>
  </div>
</main>


<!-- ::: JS ::: -->
<script defer src="./assets/dist/js/splide_config.min.js"></script>

<?php include './assets/php/layout/footer.php'; ?>