<?php include './assets/php/layout/head.php'; ?>

<?php include './assets/php/layout/header.php'; ?>


<main class="marginBottom-7">
  <section-banner data-title="Pastelería Tradicional" data-img="./assets/img/hero/hero-cake.png"></section-banner>

  <!-- ::: Productos ::: -->
  <div class="container">
    <div class="filter-buttons marginBottom-5 flex" role="group" aria-controls="product-container"
      style="flex-wrap: wrap; gap: 20px; align-items:center">
      <p class="fontSize-3">Sabores: </p>
      <button aria-pressed="false" class="fontSize-3 btn btn-outline--grey active" data-filter="todos">Todos</button>
      <button aria-pressed="false" class="fontSize-3 btn btn-outline--grey" data-filter="chocolate">Chocolate</button>
      <button aria-pressed="false" class="fontSize-3 btn btn-outline--grey" data-filter="vainilla">Vainilla</button>
    </div>

    <ul class="grid grid-md-2 grid-lg-3 justifyItems-center" id="product-container" aria-live="polite"></ul>
  </div>
</main>

<template id="template-product-card">
  <li class="product-card" data-category="" data-template="container">
    <div class="product-card__img">
      <img loading="lazy" data-template="image" src=".." alt="">
    </div>
    <div class="product-card__bg">
    </div>
    <div class="product-card__content">
      <h3 data-template="name" class="product-card__name">..</h3>
      <p data-template="description" class="product-card__desc">..</p>
      <div class="product-card__price-tag">
        <p><span class="hidden">Precio:</span> <span data-template="price">..</span></p>
      </div>
    </div>
  </li>
</template>

<script src="./assets/dist/js/filtro_productos.min.js"></script>

<?php include './assets/php/layout/footer.php'; ?>