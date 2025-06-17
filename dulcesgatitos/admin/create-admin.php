<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear-Administrativo</title>
    <link rel="stylesheet" type="text/css" href="inventario.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="icon" href="dulces_gatitos.jpg">
</head>
<body>
    <div class="navbar">
            <header class="header">
            <div class="logo-header">
                <img src="dulces_gatitos.jpg" alt="">
            </div>
            <nav class="nav-menu navbar-expand-lg ">
                <div class="container-fluid">
                    <div >                        
                        <ul class="">
                            <li class="nav-item"><a class="nav-link" href="../home.php">Inicio</a></li>  
                            <li class="nav-item"><a class="nav-link" href="admins.php">Administradores</a></li>
                            <li class="nav-item"><a class="nav-link" href="inventario.php">Inventario</a></li>          
                        </ul>                        
                    </div>
                </div>
            </nav>
        </header>
    </div> 
    <div class="ody">
    <div class="form-holder">
        <a href="admins.php" class="link">Tabla Administrativo</a>
        <h3>Crear</h3>
        <form action="../req/create-admin.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?=htmlspecialchars($_GET['error'])?>
                </p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success">
                    <?=htmlspecialchars($_GET['success'])?>
                </p>
            <?php } ?>

            <label>Usuario</label>
            <input type="text" name="user_name" > <br>

            <label>Contraseña</label>
            <input type="password" name="password" > <br>
            
            <label>Nombre</label>
            <input type="text" name="name" > <br>

            <button type="submit" class="btn-create">Crear</button>
        </form>

    </div>
    </div>
</body>
</html>