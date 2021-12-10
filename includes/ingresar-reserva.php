<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<h1 class="h3 mb-0 text-gray-800" >Ingresar reserva</h1>

	<div class="row" id="formulario">		
			<form class="row g-3" method="POST"  action="./bdatos/reserva/ingresador-r.php"  >
			<div class="col-md-6">
				<label for="name" class="form-label">Id área</label>
				<input type="text" class="form-control" name="id"placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Número de departamento</label>
				<input type="text" class="form-control" name="n_depto" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Fecha</label>
				<input type="date" class="form-control" name="fecha" placeholder="">
			</div>
			<div class="col-12 center" id="boton1">
				<button type="submit" class="btn btn-primary">Ingresar</button>
			</div>
			</form>
			
	</div>		

