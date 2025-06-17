<?php 

    include "../req/read-admin.php";
    include "search-admin.php";
    include "../req/db_conn.php";
    $administrativos = read($conn);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="dulces_gatitos.jpg">
    <link rel="stylesheet" type="text/css" href="inventario.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/inicio.css">
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
                            <li class="nav-item"><a class="nav-link" href="inventario.php">Inventario</a></li>
                             <li class="nav-item"><a class="nav-link" href="../logout.php">Cerrar sesión</a></li>                          
                        </ul>                        
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="ody">
    <div class="holder">
        <h1 class="text-center">Administrativos</h1>
        <a href="create-admin.php" class="link">Agregar nuevo administrador</a>

        <form action="admin-search.php" class="mt-3 n-table" method="get">
             <div class="input-group mb-3">
                <input type="text" class="form-control" name="searchKey" placeholder="Buscar">
                <button class="btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>
                </button>
             </div>
        </form>

    <?php if (isset($_GET['success'])) { ?>
                <p class="success">
                    <?=htmlspecialchars($_GET['success'])?>
                </p>
            <?php } ?>
    <?php if ($administrativos != 0) { ?> 
       
    <table>
        <thead>
            <tr>
            <td>Id</td>
            <td>Usuario</td>
            <td>Nombre</td>
            <td>Accion</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($administrativos as $admin) { ?>
        <tr id="content">
            <td><?=$admin['id']?></td>
            <td><?=$admin['user_name']?></td>
            <td><?=$admin['name']?></td>
            <td>
                <a href="update-admin.php?id=<?=$admin['id']?>" class="btn btn-update">Editar</a>
                <a href="../req/delete-admin.php?id=<?=$admin['id']?>" class="btn btn-delete">Eliminar</a>
            </td>

        </tr>
        <?php }?>
        </tbody>
    </table>
      
    <?php }else{?>
    <p class="error"> Error de conexion a la base </p>
    <?php }?>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>