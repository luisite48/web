<?php 
if (isset($_GET['id_producto'])) {
    include "db_conn.php";
    $id = $_GET['id_producto'];
    $sql = "DELETE FROM tabla_inventario WHERE id_producto=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $sm = "Eliminado exitosamente!";
    header("Location: ../admin/inventario.php?success=$sm"); 
}else {
    header("Location:../admin/inventario.php");
}

?>