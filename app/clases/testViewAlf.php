<?php //require_once INCLUDES.'inc_header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-6 text-center offset-xl-3">
      <img src="<?php echo IMAGES.'logo.png' ?>" alt="kolors logo" class="img-fluid" style="width: 200px;">
      <h2 class="mt-5 mb-3"><span class="text-warning">Kolors</span></h2>
      <!-- contenido -->
        <h2><?php echo sprintf('El titulo del producto es %s y su id es %s', $d->titulo, $data['id']) ?></h2>
      <!-- ends -->
    </div>
  </div>
</div>

<?php //require_once INCLUDES.'inc_footer.php'; ?>
