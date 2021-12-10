   
<?php
    $server = "localhost";
    $port = 5432;
    $db = "postgres";
    $user = "postgres";
    $password = "123";

    $connection = pg_connect("host=$server port=$port dbname=$db user=$user password=$password");

    if (!$connection) {
        die("CONEXION ERRONEA");
    }
?>