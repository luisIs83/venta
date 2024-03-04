<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?php echo $titulo; ?></h1>
                <div>
                    <p>
                        <a href="<?php echo base_url(); ?>/unidades/nuevo" class="btn btn-info">Agregar</a>
                        <a href="<?php echo base_url(); ?>/unidades/eliminados" class="btn btn-warning">Eliminados</a>
                    </p>
                </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Nombre Corto</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach($datos as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato['id'] ?></td>
                                    <td><?php echo $dato['nombre'] ?></td>
                                    <td><?php echo $dato['nombre_corto'] ?></td>
                                    <td><a href="<?php echo base_url(); ?>/unidades/editar/" <?php echo $dato['id'] ?> class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>
                                    <td><a href="<?php echo base_url(); ?>/unidades/eliminar/" <?php echo $dato['id'] ?> class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
        </div>
    </main>