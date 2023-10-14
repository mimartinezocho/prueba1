<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
                                                                   href="https://datatables.net">official DataTables
            documentation</a>.</p>

    <div>
        <p>
            <a href="<?php echo base_url();?>/productos/nuevo" class="btn btn-info">Agregar</a>
            <a href="<?php echo base_url();?>/productos/eliminados" class="btn btn-warning">Eliminados</a>
        </p>
    </div>
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Precio Venta</td>
                        <td>Precio Compra</td>
                        <td>Existencia</td>
                        <td>Stock minimo</td>
                        <td>Inventariable</td>
                        <td>Unidad</td>
                        <td>Categoria</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($datos as $dato)
                        {
                            ?>
                            <tr>
                                <td><?php echo $dato['id'];?></td>
                                <td><?php echo $dato['codigo'];?></td>
                                <td><?php echo $dato['nombre'];?></td>
                                <td><?php echo $dato['precio_venta'];?></td>
                                <td><?php echo $dato['precio_compra'];?></td>
                                <td><?php echo $dato['existencias'];?></td>
                                <td><?php echo $dato['stock_minimo'];?></td>
                                <td><?php echo $dato['inventariable'];?></td>
                                <td><?php echo $dato['id_unidad'];?></td>
                                <td><?php echo $dato['id_categoria'];?></td>
                                <td><a href="<?php echo base_url();?>/productos/editar/<?php echo $dato['id'];?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a></td>
                                <td><a href="<?php echo base_url();?>/productos/eliminar/<?php echo $dato['id'];?>" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a></td>
                            </tr>

                       <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

