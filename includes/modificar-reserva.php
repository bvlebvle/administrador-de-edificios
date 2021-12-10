
	
<h1 class="h3 mb-0 text-gray-800">Modificar reserva de área común</h1>
			
				<div class="row" id="formulario" >

					<form class="row" method="POST" action="./bdatos/reserva/modificar-r.php?id=<?php echo $_GET['id'] ?>&n_depto=<?php echo $_GET['n_depto'] ?>&fecha=<?php echo $_GET['fecha'] ?>"  >
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