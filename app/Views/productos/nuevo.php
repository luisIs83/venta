<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
		<h1 class="mt-4"><?php echo $titulo; ?></h1>
			<?php if(isset($validation)){ ?>
				<div class="alert alert-danger">
			<?php echo $validation->listErrors(); ?>
				</div>
			<?php } ?>
			<form method="POST" action="<?php echo base_url(); ?>/productos/insertar" autocomplete="off">	         
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Codigo</label>
	                        <input class="form-control" id="codigo" name="codigo" type="text" autofocus  />
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Nombre</label>
	                        <input class="form-control" id="nombre" name="nombre" type="text"  />
	                    </div> 	                                    
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Unidad</label>
	                        <select class="form-select" id='id_unidad' name="id_unidad" >
	                        	<option value="">Seleccionar unidad</option>	                        	
	                        	<?php foreach ($unidades as $unidad) { ?>
	                        		<option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['nombre']; ?></option>
	                        	<?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Categoría</label>
	                        <select class="form-select" id='id_categoria' name="id_categoria" >
	                        	<option value="">Seleccionar categoría</option>	                        	
	                        	<?php foreach ($categorias as $categoria) { ?>
	                        		<option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
	                        	<?php } ?>
	                        </select>
	                    </div> 	                                    
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Precio venta</label>
	                        <input class="form-control" id="precio_venta" name="precio_venta" type="text"   />
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Precio compra</label>
	                        <input class="form-control" id="precio_compra" name="precio_compra" type="text"  />
	                    </div> 	                                    
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-6">
	                        <label>Stock mínimo</label>
	                        <input class="form-control" id="stock_minimo" name="stock_minimo" type="text"   />
	                    </div>
	                    <div class="col-12 col-sm-6">
	                        <label>Es inventariable</label>
	                        <select id="inventariable" name="inventariable" class="form-select">
	                        	<option value="1">Si</option>
	                        	<option value="0">No</option>
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
	