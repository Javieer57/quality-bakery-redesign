<?php include './assets/php/layout/head.php'; ?>

<?php include './assets/php/layout/header.php'; ?>


<main class="marginBottom-7">
  <section-banner data-title="Pastelería Tradicional" data-img="./assets/img/hero/hero-cake.png"></section-banner>

  <!-- ::: Productos ::: -->
  <div class="container grid grid-md-2 grid-lg-3" id="product-container">
  </div>

</main>

<template id="template-product-card">
  <div class="product-card justifySelf-center">
    <div class="product-card__img">
      <img data-template="image" src=".." alt="..">
    </div>
    <div class="product-card__content">
      <h3 data-template="name" class="product-card__name">..</h3>
      <p data-template="description">..</p>
    </div>
    <div class="product-card__price-tag">
      <p><span class="hidden">Precio:</span> <span data-template="price">..</span></p>
    </div>
  </div>
</template>

<?php include './assets/php/layout/footer.php'; ?>