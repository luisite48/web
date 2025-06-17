<?php

if (isset($_POST['producto'])    &&
    isset($_POST['marca'])       &&
    isset($_POST['descripcion']) &&
    isset($_POST['categoria'])   &&
    isset($_POST['precio'])      &&
    isset($_POST['preciou'])     &&
    isset($_POST['id_producto']) &&
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
    $id =        $_POST['id_producto'];

    if (empty($producto) ||
        empty($marca)    ||
        empty($descrip)  ||
        empty($categoria)||
        empty($precio)   ||
        empty($preciou)  ||
        empty($id)       ||
        empty($cantd)    ) {

        $em = "Por favor rellene todos los campos";
        header("Location:../admin/update.php?error=$em&id_producto=$id");
    }else {
        $sql = "UPDATE tabla_inventario SET producto=?, marca=?, descripcion=?, categoria=?, precio=?, preciou=?, cd=? WHERE id_producto=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$producto, $marca, $descrip, $categoria, $precio, $preciou, $cantd, $id]);

        $sm = "Producto editado correctamente";
        header("Location:../admin/update.php?success=$sm&id_producto=$id");
    }

}