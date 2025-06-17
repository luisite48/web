<?php

function read($conn){
        $sql = "SELECT * FROM tabla_inventario";
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);

        if ($stmt->rowCount() > 0) {
            $productos = $stmt->fetchAll();
        }else $productos = 0;

        return $productos;
}

function readById($conn, $id){
        $sql = "SELECT * FROM tabla_inventario WHERE id_producto=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        if ($stmt->rowCount() > 0) {
            $producto = $stmt->fetch();
        }else $producto = 0;

        return $producto;
}