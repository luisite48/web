<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {    
   function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }

   $uname = validate($_POST['uname']);
   $pass = validate($_POST['password']);

   if (empty($uname)) {
        header("Location: acceso.php?error=Usuario requerido");
        exit();
   }elseif (empty($pass)) {
        header("Location: acceso.php?error=Password requerido");
        exit();
   }else{
    $sql ="SELECT * FROM users WHERE user_name='$uname' AND password='$pass' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $uname && $row['password'] === $pass ) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();

        }else {
        header("Location: acceso.php?error=Usuario o contraseña incorrecta!");
        exit();
    }
       
    }else {
        header("Location: acceso.php?error=Usuario o contraseña incorrecta!");
        exit();
    }
   }

}else{
    header("Location: acceso.php");
    exit();
}
