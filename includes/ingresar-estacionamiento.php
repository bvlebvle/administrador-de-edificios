<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<h1 class="h3 mb-0 text-gray-800" >Ingresar estacionamiento</h1>

	<div class="row" id="formulario">		
			<form class="row g-3" method="POST"  action="./bdatos/estacionamiento/ingresador-e.php"  >
			<div class="col-md-6">
				<label for="name" class="form-label">Número de estacionamiento</label>
				<input type="text" class="form-control" name="n_estacionamiento"placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Prorrateo</label>
				<input type="text" class="form-control" name="prorrateo" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Rut propietario</label>
				<input type="text" class="form-control" name="rut_p" placeholder="">
			</div>
			<div class="col-12 center" id="boton1">
				<button type="submit" class="btn btn-primary">Ingresar</button>
			</div>
			</form>
			
	</div>		

