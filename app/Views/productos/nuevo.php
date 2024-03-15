<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
		<h1 class="mt-4"><?php echo $titulo; ?></h1>
			<form method="POST" action="<?php echo base_url(); ?>/productos/insertar" autocomplete="off">	         
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
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Unidad</label>
	                        <select class="form-select" id='id_unidad' name="id_unidad" required>
	                        	<option value="">Seleccionar unidad</option>	                        	
	                        	<?php foreach ($unidades as $unidad) { ?>
	                        		<option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['nombre']; ?></option>
	                        	<?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Categoría</label>
	                        <select class="form-select" id='id_unidad' name="id_unidad" required>
	                        	<option value="">Seleccionar categoría</option>	                        	
	                        	<?php foreach ($categorias as $categoria) { ?>
	                        		<option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
	                        	<?php } ?>
	                        </select>
	                    </div> 	                                    
	                </div>
	            </div>
	                <br>
	                <a href="<?php echo base_url();?>/productos" class="btn btn-primary">Regresar</a>
	                <button type="submit" class="btn btn-success">Guardar</button>	            
	         </form>
	       
		</div>
	</main>
	