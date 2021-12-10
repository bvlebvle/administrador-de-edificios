<h1 class="h3 mb-0 text-gray-800">Buscar visita</h1>
<br>
<h5 >Ingrese nombre y número de departamento de visita que desea buscar:</h5>
<form action="./perfil.php" method="GET">
	<input type="text" name="nombre" placeholder="Nombre">
	<input type="text" name="n_depto" placeholder="Departamento">
	<input type="hidden" name="page" value="buscar-visita">
	<input type="submit" value="Buscar">
</form>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['nombre']) && isset($_GET['n_depto']))
	{
		$nombre = $_GET['nombre'];
		$n_depto = $_GET['n_depto'];
		
		$sql = "SELECT * FROM visita WHERE nombre LIKE '%$nombre%' AND n_depto = '$n_depto'";
		
		$result = pg_query($connection, $sql);

		if (pg_num_rows($result) > 0)
		{
			echo "<br>"; 
			
?>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Visita</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
											<th>Nombre</th>
											<th>Telefono</th>
											<th>Fecha</th>
                                            <th>Número de departamento</th>
											<th>Número de estacionamiento</th>
											<th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = pg_fetch_row($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[1]</td>";
                                                echo "<td>$row[2]</td>";
                                                echo "<td>$row[3]</td>";
												echo "<td>$row[4]</td>";
												echo "<td>$row[5]</td>";
                                                echo "<td>
                                                    <a href='./perfil.php?page=modificar-visita&id=$row[0]'>
                                                        <button type='submit' class='btn btn-primary'>Modificar</button>
                                                    </a>

                                                    <a href='./bdatos/visita/eliminar-v.php?id=$row[0]'>
                                                        <button type='submit' class='btn btn-primary'>Eliminar</button>
                                                    </a>
                                                    </td>"; 
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php

}
else
	{
		echo "<br>"; 
		echo "<h4>No se encontró reserva con esos datos.</h4>";
	}
}
?>


        
    
                 