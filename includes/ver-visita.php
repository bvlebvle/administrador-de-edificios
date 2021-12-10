<?php
    require_once './bdatos/conexion.php';
    
    $sql = "SELECT * FROM visita";
    
    $result = pg_query($connection, $sql);
    

?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Visitas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
											<th>Número de contacto</th>
											<th>Fecha</th>
                                            <th>Número de departamento</th>
											<th>Número de estacionamiento</th>
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
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        
    
                 