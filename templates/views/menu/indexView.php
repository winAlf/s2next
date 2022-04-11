<?php require_once INCLUDES.'inc_header.php'; ?>
<section class="contPrin">

    <img src="<?php echo IMAGES.'logonav.svg' ?>" alt="logo s2">
    <h2>Menú</h2>

    <br>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#altaMenu">
      Alta de Menú
    </button>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">MenuPadre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

</section>

<!-- Modal -->
<div class="modal fade" id="altaMenu" tabindex="-1" aria-labelledby="altaMenu" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
        <img src="<?php echo IMAGES.'alta.jpg' ?>" alt="imagen del formulario de alta">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
          <form class="add_menu" novalidate>
              <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Nombre</label>
                  <input class="form-control" type="text" name="nombre" id="nombre" required>
              </div>
              <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Descripción</label>
                  <input class="form-control" type="text" name="descripcion" id="descripcion" required>
              </div>
              <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">MenuPadre</label>
                  <input class="form-control" type="text" name="menuPadre" id="menuPadre">
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>
