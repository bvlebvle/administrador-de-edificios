<h1 class="h3 mb-0 text-gray-800">Buscar reserva de área común</h1>
<br>
<h5 >Ingrese fecha y número de departamento que desea buscar:</h5>
<form action="./perfil.php" method="GET">
	<input type="date" name="fecha" placeholder="fecha">
	<input type="text" name="n_depto" placeholder="departamento">
	<input type="hidden" name="page" value="buscar-reserva">
	<input type="submit" value="Buscar">
</form>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['fecha']) && isset($_GET['n_depto']))
	{
		$fecha = $_GET['fecha'];
		$n_depto = $_GET['n_depto'];
		
		$sql = "SELECT * FROM reserva WHERE fecha = '$fecha' AND n_depto = '$n_depto'";
		
		$result = pg_query($connection, $sql);

		if (pg_num_rows($result) > 0)
		{
			echo "<br>"; 
			
?>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Reserva</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
											<th>Id de área</th>
                                            <th>Número de departamento</th>
											<th>Fecha</th>
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
                                                echo "<td>
                                                    <a href='./perfil.php?page=modificar-reserva&id=$row[0]&n_depto=$row[1]&fecha=$row[2]'>
                                                        <button type='submit' class='btn btn-primary'>Modificar</button>
                                                    </a>

                                                    <a href='./bdatos/reserva/eliminar-r.php?id=$row[0]&n_depto=$row[1]&fecha=$row[2]'>
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


        
    
                 