<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<h1 class="h3 mb-0 text-gray-800" >Ingresar área común</h1>

	<div class="row" id="formulario">		
			<form class="row g-3" method="POST"  action="./bdatos/area/ingresador-ac.php"  >
			<div class="col-md-6">
				<label for="name" class="form-label">Nombre área común</label>
				<input type="text" class="form-control" name="name"placeholder="">
			</div>
			<div class="col-12 center" id="boton1">
				<button type="submit" class="btn btn-primary">Ingresar</button>
			</div>
			</form>
			
	</div>		

