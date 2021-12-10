<h1 class="h3 mb-0 text-gray-800">Calcular gasto común de bodega específico</h1>
<br>
<h5 >Ingrese el número de bodega:</h5>
<form action="./perfil.php" method="GET">
	<input type="text" name="n_bodega" placeholder="">
	<input type="hidden" name="page" value="buscar-g-bodega">
	<input type="submit" value="Buscar">
</form>

<?php
	require_once './bdatos/conexion.php';

	if (isset($_GET['n_bodega']))
	{
		$n_bodega = $_GET['n_bodega'];
		$sql = "SELECT b.n_bodega, b.prorrateo*g.monto FROM bodega b, gastototal g WHERE b.n_bodega = '$n_bodega'";
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
                                            <th>Número de bodega</th>
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
		echo "<h4>No se encontró bodega.</h4>";
	}
}
?>
