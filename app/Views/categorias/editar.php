<!-- Begin Page Content -->
<div class="container-fluid">
    <main>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>

        <form method="post" action="<?php echo base_url();?>/categorias/actualizar" autocomplete="off">
            <input type="hidden" name="id" id="id" value="<?php echo $datos['id']?>"/>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" autofocus required value="<?php echo $datos['nombre'];?>" />
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>/categorias" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>

    </main>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

