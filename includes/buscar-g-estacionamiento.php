<h1 class="h3 mb-0 text-gray-800">Calcular gasto común de estacionamiento específico</h1>
<br>
<h5 >Ingrese el número de estacionamiento:</h5>
<form action="./perfil.php" method="GET">
	<input type="text" name="n_estacionamiento" placeholder="">
	<input type="hidden" name="page" value="buscar-g-estacionamiento">
	<input type="submit" value="Buscar">
</form>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['n_estacionamiento']))
	{
		$n_estacionamiento = $_GET['n_estacionamiento'];
		$sql = "SELECT e.n_estacionamiento, e.prorrateo*g.monto FROM estacionamiento e, gastototal g WHERE e.n_estacionamiento = '$n_estacionamiento'";
		$result = pg_query($connection, $sql);

		if (pg_num_rows($result) > 0)
		{
			echo "<br>"; 
			
?>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gasto común</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Número de estacionamiento</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = pg_fetch_row($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[0]</td>";
                                                echo "<td>$row[1]</td>";
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
		echo "<h4>No se encontró estacionamiento.</h4>";
	}
}
?>
