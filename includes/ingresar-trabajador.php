<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<h1 class="h3 mb-0 text-gray-800" >Ingresar trabajador</h1>

	<div class="row" id="formulario">		
			<form class="row g-3" method="POST"  action="./bdatos/trabajador/ingresador-t.php"  >
			<div class="col-md-6">
				<label for="name" class="form-label">Nombre completo</label>
				<input type="text" class="form-control" name="name"placeholder="Valentina Almendra Díaz Gonzalez">
			</div>
			<div class="col-md-6">
				<label for="rut" class="form-label">Rut</label>
				<input type="text" class="form-control" name="rut" placeholder="12345678-9">
			</div>
			<div class="col-md-6">
				<label for="entrada" class="form-label">Horario de entrada</label>
				<input type="time" class="form-control" name="entrada" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="salida" class="form-label">Horario de salida</label>
				<input type="time" class="form-control" name="salida" placeholder="">
			</div>
			<div class="col-md-6">
				<label for="rol" class="form-label">Rol</label>
				<input type="text" class="form-control" name="rol" placeholder="Conserje">
			</div>
			<div class="col-md-6">
				<label for="remuneracion" class="form-label">Remuneración</label>
				<input type="number" class="form-control" name="remuneracion" placeholder="">
			</div>
			<div class="col-12 center" id="boton1">
				<button type="submit" class="btn btn-primary">Ingresar</button>
			</div>
			</form>
			
	</div>		

