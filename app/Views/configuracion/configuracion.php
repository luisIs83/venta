<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?php echo $titulo; ?></h1>
              <?php if(isset($validation)){ ?>
            <div class="alert alert-danger">
        <?php echo $validation->listErrors(); ?>
            </div>
        <?php } ?>
            <form method="POST" action="<?php echo base_url(); ?>/configuracion/actualizar" autocomplete="off">             
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <label>Nombre de la tienda</label>
                            <input class="form-control" id="tienda_nombre" name="tienda_nombre" type="text" value="<?php echo $nombre['valor']; ?>" autofocus required />
                        </div> 
                        <div class="col-12 col-sm-4">
                            <label>RFC</label>
                            <input class="form-control" id="tienda_rfc" name="tienda_rfc" type="text" value="<?php echo $rfc['valor']; ?>" required />
                        </div>                  
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <label>Teléfono</label>
                            <input class="form-control" id="tienda_telefono" name="tienda_telefono" type="text" value="<?php echo $telefono['valor']; ?>"  required />
                        </div> 
                        <div class="col-12 col-sm-4">
                            <label>Correo</label>
                            <input class="form-control" id="tienda_email" name="tienda_email" type="text" value="<?php echo $correo['valor']; ?>" required />
                        </div>                  
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <label>Dirección</label>
                            <textarea class="form-control" id="tienda_direccion" name="tienda_direccion" required><?php echo $direccion['valor']; ?></textarea>
                        </div> 
                        <div class="col-12 col-sm-4">
                            <label>Leyenda del ticket</label>
                            <textarea class="form-control" id="ticket_leyenda" name="ticket_leyenda" value="" required><?php echo $leyenda['valor']; ?></textarea>
                        </div>                  
                    </div>
                </div>
                    <br>
                    
                    <button type="submit" class="btn btn-success">Guardar</button>              
             </form>
        </div>
    </main>

    <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Atención!</h1>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar este registro de la tabla?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a class="btn btn-danger btn-ok">Aceptar</a>
            </div>
        </div>
    </div>
    </div>