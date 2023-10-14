<!-- Begin Page Content -->
<main>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
                                                                   href="https://datatables.net">official DataTables
            documentation</a>.</p>

    <div>
        <p>
            <a href="<?php echo base_url();?>/unidades/nuevo" class="btn btn-info">Agregar</a>
            <a href="<?php echo base_url();?>/unidades/eliminados" class="btn btn-warning">Eliminados</a>
        </p>
    </div>
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Nombre corto</td>
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
                                <td><?php echo $dato['nombre'];?></td>
                                <td><?php echo $dato['abreviatura'];?></td>
                                <td><a href="<?php echo base_url();?>/unidades/editar/<?php echo $dato['id'];?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a></td>
                                <td><a href="#" data-href="<?php echo base_url();?>/unidades/eliminar/<?php echo $dato['id'];?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Eliminar registro" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a></td>
                            </tr>

                       <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>


</div>
<!-- /.container-fluid -->

</main>
<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal">Eliminar registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p> ¿Desea eliminar este registro?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
                <a class="btn btn-danger btn-ok">Si</a>
            </div>
        </div>
    </div>
</div>


<!-- End of Main Content -->

