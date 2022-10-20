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

      <?php include './assets/php/layout/form.php'; ?>
    </section>

    <!-- ::: Mapa ::: -->
    <div id="map" class="marginBottom-7" style="height: 600px;"></div>

    <!-- ::: Sucursales ::: -->
    <div class="grid grid-md-2" id="locations">
      <div class="testimonial text-white">
        <h3 class="marginBottom-4 fontSize-3">Buenavista</h3>

        <div class="fontSize-2 ">
          <div class="marginBottom-1">
            <p><i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> <abbr title="Doctor">Dr.</abbr> Mariano
              Azuela 111, <abbr title="Santa">Sta.</abbr> María la
              Ribera, Cuauhtémoc, <abbr title="Ciudad de México">CDMX</abbr></p>
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
            <p><i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> Calzada de <abbr
                title="Guadalupe">Gpe.</abbr> #321 Local-A, Guadalupe Tepeyac, <abbr
                title="Gustavo A. Madero">GAM</abbr>, <abbr title="Ciudad de México">CDMX</abbr>
            </p>
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
              <i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> <abbr title="Avenida">Av.</abbr> Río Mixcoac
              (entre <abbr title="Avenida">Av.</abbr> Insurgentes y
              <abbr title="Avenida">Av.</abbr> Patriotismo) #58, San José Insurgentes, Alvaro
              Obregon México, <abbr title="Ciudad de México">CDMX</abbr>
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
            <p><i class="fa-fw fa-solid fa-location-dot marginRight-1"></i> <abbr title="Avenida">Av.</abbr> Central
              #199 Mz 2 LT 27 SM 3, Valle de Aragón, Ecatepec, <abbr title="Estado">Edo.</abbr> de México</p>
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