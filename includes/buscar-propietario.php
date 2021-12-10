<h1 class="h3 mb-0 text-gray-800">Buscar propietario</h1>
<br>
<h5 >Ingrese el rut del propietario que desea buscar:</h5>
<form action="./perfil.php" method="GET">
	<input type="text" name="rut" placeholder="">
	<input type="hidden" name="page" value="buscar-propietario">
	<input type="submit" value="Buscar">
</form>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['rut']))
	{
		$rut = $_GET['rut'];
		$sql = "SELECT p.rut, p.nombre, d.n_depto, e.n_estacionamiento, b.n_bodega FROM propietario p LEFT JOIN departamento d ON p.rut = d.rut_p LEFT JOIN bodega b ON p.rut = b.rut_p LEFT JOIN estacionamiento e ON p.rut = e.rut_p WHERE p.rut = '$rut'";
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
                                            <th>Número departamento</th>
                                            <th>Número estacionamiento</th>
                                            <th>Número bodega</th>
											<th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = pg_fetch_row($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[0]</td>";
                                                echo "<td>$row[1]</td>";
                                                echo "<td>$row[2]</td>";
                                                echo "<td>$row[3]</td>";
                                                echo "<td>$row[4]</td>";
                                                echo "<td>
                                                    <a href='./perfil.php?page=modificar-propietario&rut=$row[0]'>
                                                        <button type='submit' class='btn btn-primary'>Modificar</button>
                                                    </a>

                                                    <a href='./bdatos/propietario/eliminar-p.php?rut=$row[0]'>
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
		echo "<h4>No se encontró el propietario con ese rut.</h4>";
	}
}
?>


        
    
                 