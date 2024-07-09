<?php  //comprobar si existe un inicio de sesion

session_start();
   
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌟 Nosotros - Polaris 🌟</title>
    <link rel="stylesheet" href="style/iniciarSesion.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style/bienvenida.css?v=<?php echo time(); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Cinzel+Decorative:wght@400;700;900&family=Syne:wght@400..800&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Brygada+1918:ital,wght@0,400..700;1,400..700&family=Cinzel+Decorative:wght@400;700;900&family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

</head>
<body id="iniciarSesion">
<?php  //comprobar si existe un inicio de sesion

if (empty($_SESSION["id"])){
   
?>   
    <header class="encabezado">
        <nav class="header-nav">
            <div class="logo-container"> 
                <a href="index.php"><img src="imagenes/logo.png" width="45%"></a> 
            </div>
            <div class="buscador-container">
                <input type="search" class="form-control" name="s" id="" placeholder="Buscar producto..." required="">
            </div>
               
             <div class="botones-container">
                <ul class="header-list">
                <li><img src="imagenes/carrito.png" width="30px"></li>
                        <li><img src="imagenes/amor.png" width="35px"></li>
                        <li><a href="iniciaSesion.html"><img src="imagenes/perfil.png" width="30px"></a></li>
                </ul>
            </div>
        </nav>

        <nav class="navegador">
            <ul class="opciones">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#novedades">Libros</a></li>
                <li><a href="index.php#mas-vendidos">Más vendidos</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="conexionAPI.html">Conexion API</a></li>
                <li><a href="registroLibros.php">Registro Libros</a></li>
            </ul>
        </nav>
<?php 
    }else{
?> 

        <header class="encabezado">
        <nav class="header-nav">
            <div class="logo-container"> 
                <a href="index.php"><img src="imagenes/logo.png" width="45%"></a> 
            </div>
            <div class="buscador-container">
                <input type="search" class="form-control" name="s" id="" placeholder="Buscar producto..." required="">
            </div>
               
             <div class="botones-container">
                <ul class="header-list">
                    <li><img src="imagenes/carrito.png" width="35px"></li>
                    <li><img src="imagenes/amor.png" width="35px"></li>
                    <li><a  href="editarUsuario.php"><img alt="" src="imagenes/editarUsuario.webp" width="34px"></a></li>
                    <li><a  href="cerrarSesion.php"><img src="imagenes/cerrarSesion.png" width="34px"></a></li>
                </ul>
            </div>
        </nav>
        
        <nav class="navegador">
            <ul class="opciones">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#novedades">Libros</a></li>
                <li>Agendas</li>
                <li ><a href="index.php#mas-vendidos">Más vendidos</a></li>
                <li ><a href="nosotros.php">Nosotros</a></li>
                <li><a href="">Conexion API</a></li>
                <li><a href="registroLibros.php">Registro Libros</a></li>
                <li><a href="mostrarLibros.php">Ver Libros Registrados</a></li>
            </ul>
        </nav>

    </header>
<?php  
}
?>

    <section class="registro-libro">
        <p class="h1">Somos estudiantes de Codo a Codo - FullStack PHP Comisión #24144</p>    

        <p class="h3">Cecilia Cordeiro</p>
        <p class="h3">Diego González</p>
        <p class="h3">Ezequiel González</p>
        <p class="h3">Grey Ortega</p>

    </section>
</body>
</html>





    