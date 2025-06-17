<?php 
    
    include "../req/read.php";
    include "../req/db_conn.php";
    if (isset($_GET['id_producto'])) {
        $id = $_GET['id_producto'];
        $producto = readById($conn, $id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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
                            <li class="nav-item"><a class="nav-link" href="inventario.php">Inventario</a></li>
                            <li class="nav-item"><a class="nav-link" href="admins.php">Administradores</a></li>          
                        </ul>                        
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="ody">
    <div class="form-holder">
        <a href="inventario.php" class="link">Tabla inventario</a>
        <form action="../req/update.php" method="post">
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

            
            <label>Producto</label>
            <input type="text" name="producto" value="<?=$producto['producto']?>"> <br>

            <label>Marca</label>
            <input type="text" name="marca" value="<?=$producto['marca']?>"> <br>
            
            <label>Descripcion</label>
            <input type="text" name="descripcion" value="<?=$producto['descripcion']?>"> <br>

            <label>Categoria</label>
            <input type="text" name="categoria" value="<?=$producto['categoria']?>"> <br>

            <label>Precio</label>
            <input type="number" name="precio" value="<?=$producto['precio']?>"> <br>

            <label>Precio Unitario</label>
            <input type="number" name="preciou" value="<?=$producto['preciou']?>"> <br>

            <label>Catidad disponible</label>
            <input type="number" name="cd" value="<?=$producto['cd']?>">   <br>

            <input type="text" name="id_producto" value="<?=$producto['id_producto']?>" hidden>
            <button type="submit" class="btn-create">Editar </button>
        </form>

    </div>
    </div> 
</body>
</html>
<?php }else {
        header("Location: inventario.php");
}?>