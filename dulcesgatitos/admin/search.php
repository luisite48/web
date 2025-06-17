<?php
include "../req/db_conn.php";
// Search 
function searchProductos($key, $conn){
   $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$key);
   $sql = "SELECT * FROM tabla_inventario
           WHERE id_producto LIKE ? 
           OR producto LIKE ?
           OR marca LIKE ?
           OR descripcion LIKE ?
           OR categoria LIKE ?
           OR precio LIKE ?
           OR preciou LIKE ?
           OR cd LIKE ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$key, $key, $key, $key, $key, $key, $key, $key]);

   if ($stmt->rowCount() == 1) {
     $productos = $stmt->fetchAll();
     return $productos;
   }else {
    return 0;
   }
}