<?php include './assets/php/layout/head.php'; ?>

<?php include './assets/php/layout/header.php'; ?>

<main class="marginBottom-7">
  <section-banner data-title="Contacto" data-img="./assets/img/hero/hero-cake.png"></section-banner>

  <div class="container">
    <!-- ::: Contact ::: -->
    <section class="grid grid-md-2 marginBottom-7">
      <table class="testimonial text-white">
        <caption class="fontSize-4 marginBottom-3">Horarios</caption>
        <thead class="hidden ">
          <tr>
            <th>Día</th>
            <th>Horario</th>
          </tr>
        </thead>
        <tbody class="fontSize-lg-3">
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Lunes</td>
            <td><time>08:00</time> a <time>19:00</time></td>
          </tr>
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Martes</td>
            <td><time>08:00</time> a <time>19:00</time></td>
          </tr>
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Miércoles</td>
            <td><time>08:00</time> a <time>19:00</time></td>
          </tr>
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Jueves</td>
            <td><time>08:00</time> a <time>19:00</time></td>
          </tr>
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Viernes</td>
            <td><time>08:00</time> a <time>19:00</time></td>
          </tr>
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Sábado</td>
            <td><time>09:00</time> a <time>18:00</time></td>
          </tr>
          <tr class="flex flex-justify-between marginBottom-3">
            <td>Domingo</td>
            <td><time>09:00</time> a <time>18:00</time></td>
          </tr>
          <tr class="flex flex-justify-between">
            <td>Días festivos</td>
            <td>cerrado</td>
          </tr>
        </tbody>
      </table>

      <div>
        <h2 class="decorated-title marginBottom-5 fontSize-4">Tenemos la solución que buscas</h2>
        <p class="marginBottom-3">Surte tu restaurante con productos de primera calidad a un precio exclusivo. Ponte
          en contacto con nosotros.</p>

        <form action="https://formsubmit.co/javieer.eufracio@gmail.com" id="contact-form" method="POST">
          <div class="form-field marginBottom-2">
            <label for="mail" class="form-field__label">Correo electrónico</label>
            <input class="form-field__input" type="email" name="email" id="mail" />
          </div>

          <div class="form-field marginBottom-2">
            <label for="subject" class="form-field__label">Asunto</label>
            <input class="form-field__input" type="text" name="_subject" id="subject" />
          </div>

          <div class="form-field marginBottom-2">
            <label for="message" class="form-field__label">Mensaje</label>
            <textarea class="form-field__input" name="message" id="message"></textarea>
          </div>

          <div class="textAlign-center">
            <button type class="btn btn-orange btn-padding-md">Enviar</button>
          </div>

          <!-- https://formsubmit.co/documentation -->
          <input type="hidden" name="_next" value="http://localhost/quality-bakery/thanks.php">
          <input type="text" name="_honey" style="display:none">
          <input type="hidden" name="_template" value="table">
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