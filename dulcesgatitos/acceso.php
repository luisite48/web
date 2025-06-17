<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" href="img/dulces_gatitos.jpg">
</head>
<body > 
    <div id="principal">   
        <div class="navbar">
            <header class="header">
                <div class="logo-header">
                    <img src="img/dulces_gatitos.jpg" alt="">
                </div>
                <nav class="nav-menu">
                    <div class="container-fluid">
                        <div >                        
                            <ul class="">
                                <li class="nav-item"><a class="nav-link " aria-current="page" href="index.html">Inicio</a></li>                             
                            </ul>                            
                        </div>
                    </div>
                </nav>
            </header>
         </div>
     
    
    <section>
        
       
        
    <form action="login.php" method="post">
        <h2>Inicio de sesion</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'] ;?></p>
        <?php } ?>        
        
        <label >Usuario</label>
        <input type="text" name="uname" placeholder="Usuario" onkeydown="return soloLetras(event);"> <br>

        <label >Password</label>
        <input type="password" name="password" placeholder="Password"> <br>
        <label></label>
        <button type="submit" >Iniciar sesión</button>
    </form>     
    </section>
    </div>
    <script src="js/validaletra.js" ></script>
</body>
</html>