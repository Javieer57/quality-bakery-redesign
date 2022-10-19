<?php include './assets/php/layout/head.php'; ?>

<?php include './assets/php/layout/header.php'; ?>

<main class="marginBottom-7">
  <section-banner data-title="Contacto" data-img="./assets/img/hero/hero-cake.png"></section-banner>

  <div class="container">
    <!-- ::: Contact ::: -->
    <section class="grid grid-md-2 marginBottom-7">
      <figure class="testimonial text-white">
        <h3 class="fontSize-4 marginBottom-3">Horarios</h3>

        <dl class="flex flex-justify-between fontSize-lg-3 gap-2">
          <dt>Lunes</dt>
          <dd><time>08:00</time> a <time>19:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Martes</dt>
          <dd><time>08:00</time> a <time>19:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Miércoles</dt>
          <dd><time>08:00</time> a <time>19:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Jueves</dt>
          <dd><time>08:00</time> a <time>19:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Viernes</dt>
          <dd><time>08:00</time> a <time>19:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Sábado</dt>
          <dd><time>09:00</time> a <time>18:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Domingo</dt>
          <dd><time>09:00</time> a <time>18:00</time></dd>
        </dl>
        <dl class="flex flex-justify-between fontSize-lg-3">
          <dt>Días festivos</dt>
          <dd>cerrado</dd>
        </dl>
      </figure>

      <div>
        <h2 class="decorated-title marginBottom-5 fontSize-4">Tenemos la solución que buscas</h2>
        <p class="marginBottom-3">Surte tu restaurante con productos de primera calidad a un precio exclusivo. Ponte
          en contacto con nosotros.</p>

        <form action="" id="contact-form">
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

    <!-- ::: Mapa ::: -->
    <div id="map" class="marginBottom-7" style="height: 600px;"></div>

    <!-- ::: Sucursales ::: -->
    <div class="grid grid-md-2" id="locations">
      <div class="testimonial text-white">
        <h3 class="marginBottom-4 fontSize-3">Buena vista</h3>

        <div class="fontSize-2 ">
          <div class="marginBottom-1">
            <p><i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> Dr. Mariano Azuela 111, Sta María la
              Ribera, Cuauhtémoc, 06400 Ciudad de México, CDMX</p>
          </div>
          <div class="marginBottom-4">
            <p><i class="fa-fw fa-solid fa-phone marginRight-1"></i> 55-55-47-72-19 y 55-55-47-02-74</p>
          </div>
          <button class="btn-white" data-location="buenavista">Ver en el mapa</button>
        </div>
      </div>
      <div class="testimonial text-white">
        <h3 class="marginBottom-4 fontSize-3">La Villa</h3>

        <div class="fontSize-2">
          <div class="marginBottom-1">
            <p><i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> Calzada de Gpe. #321 Local-A Col.
              Guadalupe Tepeyac Del. G.A.M. México D.F</p>
          </div>
          <div class="marginBottom-4">
            <p><i class="fa-fw fa-solid fa-phone marginRight-1"></i> 57-39-02-14</p>
          </div>
          <button class="btn-white" data-location="villa">Ver en el mapa</button>
        </div>
      </div>
      <div class="testimonial text-white">
        <h3 class="marginBottom-4 fontSize-3">Mixcoac</h3>

        <div class="fontSize-2">
          <div class="marginBottom-1">
            <p>
              <i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> Av. Río Mixcoac (entre Av. Insurgentes y
              Av. Patriotismo) # 58 Col. San José Insurgentes Del. Alvaro
              Obregon México D.F
            </p>
          </div>
          <div class="marginBottom-4">
            <p><i class="fa-fw fa-solid fa-phone marginRight-1"></i> 56-15-33-92 y 55-98-33-80</p>
          </div>
          <button class="btn-white" data-location="mixcoac">Ver en el mapa</button>
        </div>
      </div>
      <div class="testimonial text-white">
        <h3 class="marginBottom-4 fontSize-3">Múzquiz</h3>

        <div class="fontSize-2">
          <div class="marginBottom-1">
            <p><i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> Av. Central #199 Mz 2 LT 27 SM 3 Col.
              Valle de Aragón, Ecatepec Edo. de México</p>
          </div>
          <div class="marginBottom-4">
            <p><i class="fa-fw fa-solid fa-phone marginRight-1"></i> 57-11-88-55</p>
          </div>
          <button class="btn-white" data-location="muzquiz">Ver en el mapa</button>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="./assets/dist/js/contacto.min.js"></script>
<?php include './assets/php/layout/footer.php'; ?>