<?php

$sname ="localhost";
$unmae ="root";
$password ="";

$db_name ="dulceria";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Error de conexión!";
}