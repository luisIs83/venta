<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
		<h1 class="mt-4"><?php echo $titulo; ?></h1>
			<form method="POST" action="<?php echo base_url(); ?>/categorias/insertar" autocomplete="off">	         
	            <div class="form-group">
	                <div class="row">
	                    <div class="col-12 col-sm-4">
	                        <label>Nombre</label>
	                        <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
	                    </div> 	                                    
	                </div>
	            </div>
	                <br>
	                <a href="<?php echo base_url();?>/categorias" class="btn btn-primary">Regresar</a>
	                <button type="submit" class="btn btn-success">Guardar</button>	            
	         </form>
	       
		</div>
	</main>
	