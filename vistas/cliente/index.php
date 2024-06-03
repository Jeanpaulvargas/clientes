<?php 
include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center text-primary mb-4">FORMULARIO DE CLIENTES</h1>
<div class="row justify-content-center">
    <form action="../../controladores/clientes/guardar.php" method="POST" class="border bg-white shadow-sm rounded p-5 col-lg-6">
        <div class="row mb-4">
            <div class="col">
                <label for="cli_nombre" class="form-label text-dark">Nombre</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="cli_apellido" class="form-label text-dark">Apellido</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="cli_nit" class="form-label text-dark">NIT</label>
                <input type="number" name="cli_nit" id="cli_nit" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="cli_telefono" class="form-label text-dark">Teléfono</label>
                <input type="number" name="cli_telefono" id="cli_telefono" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/clientes/buscar.php" class="btn btn-outline-primary w-100">Buscar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>
