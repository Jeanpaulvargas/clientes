<?php 
include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center text-primary mb-4">FORMULARIO DE CLIENTES</h1>
<div class="row justify-content-center">
    <form action="../../controladores/clientes/buscar.php" method="GET" class="border bg-white shadow-sm rounded p-5 col-lg-6">
        <div class="row mb-4">
            <div class="col">
                <label for="cli_nombre" class="form-label text-dark">Nombre</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control border-primary">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="cli_apellido" class="form-label text-dark">Apellido</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control border-primary">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-dark w-100 text-white">Buscar</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>
