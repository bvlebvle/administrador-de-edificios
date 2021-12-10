<h1 class="h3 mb-0 text-gray-800">Buscar propietario o arrendatario</h1>
<br>
<h5 >Ingrese el número de departamento:</h5>
<form action="./perfil.php" method="GET">
	<input type="text" name="n_depto" placeholder="">
	<input type="hidden" name="page" value="buscar-departamento">
	<input type="submit" value="Buscar">
</form>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['n_depto']))
	{
		$n_depto = $_GET['n_depto'];
		$sql = "SELECT p.rut , p.nombre, p.telefono FROM departamento d, propietario p WHERE n_depto = '$n_depto' AND d.rut_p = p.rut";
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

	if (isset($_GET['n_depto']))
	{
		$n_depto = $_GET['n_depto'];
		$sql = "SELECT a.rut , a.nombre, a.telefono FROM arrendatario a, departamento d WHERE d.n_depto = '$n_depto' AND d.n_depto = a.n_depto";
		
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



        
    
                 