<?php
include "../req/db_conn.php";
// Search 
function searchAdmin($key, $conn){
   $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$key);
   $sql = "SELECT * FROM users
           WHERE id LIKE ? 
           OR user_name LIKE ?
           OR name LIKE ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$key, $key, $key]);

   if ($stmt->rowCount() == 1) {
     $productos = $stmt->fetchAll();
     return $productos;
   }else {
    return 0;
   }
}