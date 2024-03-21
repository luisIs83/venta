<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
		<h1 class="mt-4"><?php echo $titulo; ?></h1>
			<form method="POST" action="<?php echo base_url(); ?>/clientes/actualizar" autocomplete="off">
				<input type="hidden" id="id" name="id" value="<?php echo $cliente['id']; ?>">

	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Nombre</label>
	                        <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $cliente['nombre']; ?>" autofocus required />
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Dirección</label>
	                        <input class="form-control" id="direccion" name="direccion" type="text" value="<?php echo $cliente['direccion']; ?>" required />
	                    </div> 	                                    
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Teléfono</label>
	                        <input class="form-control" id="telefono" name="telefono" type="text" value="<?php echo $cliente['telefono']; ?>" required />
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Correo</label>
	                        <input class="form-control" id="correo" name="correo" type="text" value="<?php echo $cliente['correo']; ?>" required />
	                    </div> 	                                    
	                </div>
	            </div>
	                <br>
	                <a href="<?php echo base_url();?>/clientes" class="btn btn-primary">Regresar</a>
	                <button type="submit" class="btn btn-success">Guardar</button>	            
	         </form>
	       
		</div>
	</main>
	