<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<h1 class="h3 mb-0 text-gray-800" >Modificar propietario</h1>

	<div class="row" id="formulario">		
			<form class="row" method="POST"  action="./bdatos/propietario/modificar-p.php?rut=<?php echo $_GET['rut'] ?>"  >
			<div class="col-md-6">
				<label for="name" class="form-label">Nombre completo</label>
				<input type="text" class="form-control" name="name" placeholder="Valentina Almendra Díaz Gonzalez">
			</div> 
			<div class="col-md-6">
				<label for="entrada" class="form-label">Número de contacto</label>
				<input type="text" class="form-control" name="telefono" placeholder="">
			</div>
			<div class="col-12 center" id="boton1">
				<button type="submit" class="btn btn-primary">Modificar</button>
			</div>
			</form>
			
	</div>		

