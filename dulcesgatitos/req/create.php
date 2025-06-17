<?php

if (isset($_POST['producto'])    &&
    isset($_POST['marca'])       &&
    isset($_POST['descripcion']) &&
    isset($_POST['categoria'])   &&
    isset($_POST['precio'])      &&
    isset($_POST['preciou'])     &&
    isset($_POST['cd'])
) {

    include "db_conn.php";
    $producto =  $_POST['producto'];
    $marca =     $_POST['marca'];
    $descrip =   $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio =    $_POST['precio'];
    $preciou =   $_POST['preciou'];
    $cantd =     $_POST['cd'];

    if (empty($producto) ||
        empty($marca)    ||
        empty($descrip)  ||
        empty($categoria)||
        empty($precio)   ||
        empty($preciou)  ||
        empty($cantd)    ) {

        $em = "Por favor rellene todos los campos";
        header("Location:../admin/create.php?error=$em");
    }else {
        $sql = "INSERT INTO tabla_inventario(producto, marca, descripcion, categoria, precio, preciou, cd) VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$producto, $marca, $descrip, $categoria, $precio, $preciou, $cantd]);

        $sm = "Producto creado correctamente";
        header("Location:../admin/create.php?success=$sm");
    }

}