<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌟 Registrá Usuario - Polaris 🌟</title>
    <link rel="stylesheet" href="style/iniciarSesion.css">
    <link rel="stylesheet" href="style/bienvenida.css">

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
                <li>Agendas</li>
                <li ><a href="index.php#mas-vendidos">Más vendidos</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="">Conexion API</a></li>
                <li><a href="registroLibros.php">Registro Libros</a></li>
            </ul>
        </nav>

    </header>

    <section class="inicioSesion">
        <form action="envioUsuario.php" method="post" class="formulario">
            <h1 class="titulo-IS"><b>Registrate</b></h1>
            <div>
                <div>
                    <input class="completar" type="text" name="nombre" placeholder="Nombre" autofocus/>
                </div>
                <div>
                    <input class="completar" type="text" name="apellido" placeholder="Apellido"/>
                </div>
                <div>
                    <input class="completar" type="email" name="email" placeholder="Email"/>
                </div>
                <div>
                    <input class="completar" type="number" name="edad" min ="18" max ="99" placeholder="Edad"/>
                </div>
                <div>
                    <input class="completar" type="password" name="pass" placeholder="Contraseña"/>
                </div>
                <div>
                    <input class="completar" type="password" name="pass2" placeholder="Vuelve a Ingresar su Contraseña"/>
                </div>
            </div>    
            <input class="btn_buscar_libro" type="button" onclick="history.back()" value="Regresar" />
            <input class="btn_buscar" type="submit" class="boton" value="Registrar" />
        </form>
   
    </section>

    <script src="js/iniciarSesion.js"></script>


</body>
</html>