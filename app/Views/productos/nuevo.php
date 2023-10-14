<!-- Begin Page Content -->
<div class="container-fluid">
<main>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>

    <form method="post" action="<?php echo base_url();?>/productos/insertar" autocomplete="off">
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Codigo</label>
                    <input class="form-control" id="codigo" name="codigo" type="text" autofocus required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Precio venta</label>
                    <input class="form-control" id="precio_venta" name="precio_venta" type="number" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Precio compra</label>
                    <input class="form-control" id="precio_compra" name="precio_compra" type="number" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Existencias</label>
                    <input class="form-control" id="existencias" name="existencias" type="number" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Stock minimo</label>
                    <input class="form-control" id="stock_minimo" name="stock_minimo" type="number" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Inventariable</label>
                    <input class="form-control" id="inventariable" name="inventariable" type="text" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Unidad</label>
                    <input class="form-control" id="id_unidad" name="id_unidad" type="hidden"  required />
                    <input class="form-control" id="unidad" name="unidad" type="text"  required />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Categoria</label>
                    <input class="form-control" id="id_categoria" name="id_categoria" type="hidden"  required />
                    <input class="form-control" id="categoria" name="categoria" type="text" required />
                </div>
            </div>
        </div>
        <a href="<?php echo base_url();?>/productos" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

</main>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

