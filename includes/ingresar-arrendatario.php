<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<h1 class="h3 mb-0 text-gray-800" >Ingresar arrendatario</h1>

	<div class="row" id="formulario">		
			<form class="row g-3" method="POST"  action="./bdatos/arrendatario/ingresador-a.php"  >
			<div class="col-md-6">
				<label for="name" class="form-label">Nombre completo</label>
				<input type="text" class="form-control" name="name"placeholder="Valentina Almendra Díaz Gonzalez">
			</div>
			<div class="col-md-6">
				<label for="rut" class="form-label">Rut</label>
				<input type="text" class="form-control" name="rut" placeholder="12345678-9">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Número de contacto</label>
				<input type="text" class="form-control" name="telefono" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Número de departamento</label>
				<input type="text" class="form-control" name="n_depto" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Número de estacionamiento</label>
				<input type="text" class="form-control" name="n_estacionamiento" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Número de bodega</label>
				<input type="text" class="form-control" name="n_bodega" placeholder="">
			</div>
			
			<div class="col-12 center" id="boton1">
				<button type="submit" class="btn btn-primary">Ingresar</button>
			</div>
			</form>
			
	</div>		

