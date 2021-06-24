<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar producto</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <textarea placeholder="precio" class="form-control" name="precio" id="precio" cols="30" rows="10" required></textarea>
            </div>
			<div class="form-group">
                <label for="cantidad">Cantidad</label>
                <textarea placeholder="cantidad" class="form-control" name="cantidad" id="cantidad" cols="30" rows="10" required></textarea>
            </div>
			<div class="form-group">
                <label for="proveedor">Proveedor</label>
                <textarea placeholder="proveedor" class="form-control" name="proveedor" id="proveedor" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>