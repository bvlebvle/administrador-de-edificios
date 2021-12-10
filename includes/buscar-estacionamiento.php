<h1 class="h3 mb-0 text-gray-800">Buscar propietario o arrendatario</h1>
<br>
<h5 >Ingrese el número de estacionamiento:</h5>
<form action="./perfil.php" method="GET">
	<input type="text" name="n_estacionamiento" placeholder="">
	<input type="hidden" name="page" value="buscar-estacionamiento">
	<input type="submit" value="Buscar">
</form>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

	require_once './bdatos/conexion.php';

	if (isset($_GET['n_estacionamiento']))
	{
		$n_estacionamiento = $_GET['n_estacionamiento'];
		$sql = "SELECT p.rut , p.nombre, p.telefono FROM estacionamiento e, propietario p WHERE n_estacionamiento = '$n_estacionamiento' AND e.rut_p = p.rut";
		$result = pg_query($connection, $sql);

		if (pg_num_rows($result) > 0)
		{
			echo "<br>"; 
			
?>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Propietario</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Rut</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = pg_fetch_row($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[0]</td>";
                                                echo "<td>$row[1]</td>";
                                                echo "<td>$row[2]</td>";
                                             
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
		echo "<h4>No se encontró propietario.</h4>";
	}
}
?>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['n_estacionamiento']))
	{
		$n_estacionamiento = $_GET['n_estacionamiento'];
		$sql = "SELECT a.rut , a.nombre, a.telefono FROM arrendatario a, estacionamiento e WHERE e.n_estacionamiento = '$n_estacionamiento' AND e.n_estacionamiento = a.n_estacionamiento";
		$result = pg_query($connection, $sql);

		if (pg_num_rows($result) > 0)
		{
			echo "<br>"; 
			
?>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Arrendatario</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Rut</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = pg_fetch_row($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[0]</td>";
                                                echo "<td>$row[1]</td>";
                                                echo "<td>$row[2]</td>";
                                            
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
		echo "<h4>No se encontró arrendatario.</h4>";
	}
}
?>



        
    
                 