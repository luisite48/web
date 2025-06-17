<?php

if (isset($_POST['user_name'])    &&
    isset($_POST['password'])       &&
    isset($_POST['name']) 
    
) {

    include "db_conn.php";
    $user =  $_POST['user_name'];
    $pass =     $_POST['password'];
    $name =   $_POST['name'];
    

    if (empty($user) ||
        empty($pass)    ||
        empty($name)  
          ) {

        $em = "Por favor rellene todos los campos";
        header("Location:../admin/create-admin.php?error=$em");
    }else {
        $sql = "INSERT INTO users(user_name, password, name) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$user, $pass, $name]);

        $sm = "Administativo creado correctamente";
        header("Location:../admin/create-admin.php?success=$sm");
    }

}