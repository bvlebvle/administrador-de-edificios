
	
<h1 class="h3 mb-0 text-gray-800">Modificar visita</h1>
			
				<div class="row" id="formulario" >

					<form class="row" method="POST" action="./bdatos/visita/modificar-v.php?id=<?php echo $_GET['id'] ?>"  >
					<div class="col-md-6">
						<label for="name" class="form-label">Nombre completo</label>
						<input type="text" class="form-control" name="nombre"placeholder="">
					</div>
					<div class="col-md-6">
						<label for="rut" class="form-label">Número de contacto</label>
						<input type="text" class="form-control" name="telefono" placeholder="">
					</div>
					<div class="col-md-6">
						<label for="entrada" class="form-label">Fecha</label>
						<input type="date" class="form-control" name="fecha" placeholder="">
					</div>
					<div class="col-md-6">
						<label for="salida" class="form-label">Número de departamento</label>
						<input type="text" class="form-control" name="n_depto" placeholder="">
					</div>
					<div class="col-md-6">
						<label for="rol" class="form-label">Número de estacionamiento</label>
						<input type="text" class="form-control" name="n_estacionamiento" placeholder="">
					</div>
					<div class="col-12 center" id="boton1">
					<button type="submit" class="btn btn-primary">Ingresar</button>
			</div>
					</form>
				</div>