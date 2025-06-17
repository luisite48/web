<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $sm = "Eliminado exitosamente!";
    header("Location: ../admin/admins.php?success=$sm"); 
}else {
    header("Location:../admin/admins.php");
}

?>