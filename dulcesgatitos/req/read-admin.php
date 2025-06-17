<?php

function read($conn){
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);

        if ($stmt->rowCount() > 0) {
            $administrativos = $stmt->fetchAll();
        }else $administrativos = 0;

        return $administrativos;
}

function readById($conn, $id){
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        if ($stmt->rowCount() > 0) {
            $admin = $stmt->fetch();
        }else $admin = 0;

        return $admin;
}