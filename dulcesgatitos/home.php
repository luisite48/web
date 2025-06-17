<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="img/dulces_gatitos.jpg">
</head>
<body>
    <div class="navbar">
            <header class="header">
            <div class="logo-header">
                <img src="img/dulces_gatitos.jpg" alt="">
            </div>
            <nav class="nav-menu navbar-expand-lg ">
                <div class="container-fluid">
                    <div >
                        
                        <ul class="">
                            <li class="nav-item"><a class="nav-link" href="admin/inventario.php">Inventario</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin/admins.php">Administrativos</a></li>
                            
                            
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </header>
        </div> 
        <div class="pody">
            <h1>Hola, <?php echo $_SESSION['name']; ?></h1>  
            <h1>Bienvenido, ¿Qué vamos a hacer hoy?</h1>
            <a href="logout.php" class="">Cerrar sesión</a>
        </div>    
</body>
</html>
<?php
}else {
     header("Location: acceso.php");
     exit();
}
?>