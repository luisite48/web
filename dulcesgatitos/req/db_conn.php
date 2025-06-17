<?php

$sname ="localhost";
$unmae ="root";
$password ="";

$db_name ="dulceria";


try {
    $conn = new PDO("mysql:host=$sname; dbname=$db_name", $unmae, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexion fallida:". $e->getMessage();
}