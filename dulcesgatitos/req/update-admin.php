<?php

if (isset($_POST['user_name'])      &&
    isset($_POST['password'])       &&
    isset($_POST['name'])           &&
    isset($_POST['id'])
) {

    include "db_conn.php";
    $user =  $_POST['user_name'];
    $pass =  $_POST['password'];
    $name =  $_POST['name'];
    $id   =  $_POST['id'];
    

    if (empty($user) ||
        empty($pass) ||
        empty($name) ||
        empty($id)      
  ) {

        $em = "Por favor rellene todos los campos";
        header("Location:../admin/update-admin.php?error=$em&id=$id");
    }else {
        $sql = "UPDATE users SET user_name=?, password=?, name=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$user, $pass, $name, $id]);

        $sm = "Administrativo editado correctamente";
        header("Location:../admin/update-admin.php?success=$sm&id=$id");
    }

}