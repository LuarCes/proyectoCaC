<?php  //comprobar si existe un inicio de sesion

session_start();
   
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌟 Polaris 🌟</title>
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
<body>



<?php  //comprobar si existe un inicio de sesion

if (empty($_SESSION["id"])){
   
?>   
    <header class="encabezado" id ="encabezado">
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
                <li><a href="index.php#mas-vendidos">Más vendidos</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="">Conexion API</a></li>
                <li><a href="registroLibros.php">Registro Libros</a></li>
                <li><a href="mostrarLibros.php">Ver Libros Registrados</a></li>
            </ul>
        </nav>

    </header>
<?php  
}
?>
    <main>
        <nav class="banner">
             <div class="banner-img">
                <h1 class="texto-banner" id="t1">Explora mundos inspiradores</h1><h1 class="texto-banner" id="t2"> entre nuestras estanterías</h1>
                <img src="imagenes/74bbe169c21accd0b63da024147ae722.gif">
             </div>
        </nav>


        <section class="post-banner">
            <div class="cuadro" id="izq">
                <img src="imagenes/entrega-gratis.png" width="80px" height="80px">
                <div class="texto">
                    <h1>Envíos gratis</h1>
                    <p>A partir de $20000 AR a todo el país, a través de Oca, Correo Argentino o Andreani</p>
                </div>
            </div>
            <div class="cuadro" id="centro">
                <img src="imagenes/devolucion.png" width="80px" height="80px">
                <div class="texto">
                    <h1>Devolución</h1>
                    <p>Si tu compra presenta algún incoveniente, puedes devolverlo dentro de un período de tiempo, sin recargos.</p>
                </div>
            </div>
            <div class="cuadro" id="der">
                <img src="imagenes/tarjeta.png" width="80px" height="80px">
                <div class="texto">
                    <h1>Tarjeta de puntos</h1>
                    <p>Pide tu tarjeta ahora y empieza a acumular puntos para ganar descuentos en tus próximas compras</p>
                </div>
            </div>
        </section>



        <section class="categorias">
            <div class="catImg" id="juvenil">
                <img src="imagenes/juvenil1.jpg" width="100%">
                <div class="capa">
                    <h3>JUVENIL</h3>
                </div>
            </div>
            <div class="catImg" id="Ficcion">
                <img src="imagenes/novedad2.jpg" width="100%">
                <div class="capa">
                    <h3>FICCION</h3>
                </div>
            </div>
            <div class="catImg" id="Artes">
                <img src="imagenes/artes1.jpg" width="100%">
                <div class="capa">
                    <h3>ARTES</h3>
                </div>
            </div>
            <div class="catImg" id="clasicos">
                <img src="imagenes/clasico1.jpg" width="100%">
                <div class="capa">
                    <h3>CLASICOS</h3>
                </div>
            </div>
        </section>


        <section class="buscador">
            <div class="buscador-texto">
                <h1 class="texto-banner" id="text-buscador">¿Qué te gustaría leer hoy?</h1>
            </div>
            <input type="search" class="form-buscador" name="s" id="" placeholder="Buscar libro..." required="">

        </section>



        <section class="container-libros" id="mas-vendidos">
            <div class="texto-container">
                <h3>Más vendidos</h3>
            </div>
            <div class="tarjetas-container">
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/vendido1.jpg" width="100%">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">LA FELICIDAD</p>
                        <p>Rolon, Gabriel</p>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/vendido2.jpg" width="100%">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">ANTES DE QUE SE ENFRIE EL CAFE</p>
                        <p>Kawaguchi, Toshikazu</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/vendido3.jpg" width="100%">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">UN LUGAR SOLEADO PARA GENTE SOMBRIA</p>
                        <p>Enriquez, Mariana</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/vendido4.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">EN AGOSTO NOS VEMOS</p>
                        <p>Garcia Marquez, Gabriel</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/vendido5.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">HARRY POTTER Y LA PIEDRA FILOSOFAL</p>
                        <p>Rowling, J. K.</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/vendido6.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">LA PACIENTE SILENCIOSA</p>
                        <p class="autor">Michaelides, Alex</p>
                    </div>
                    
                </div>
            </div>

        </section>

        <section class="container-libros" id="novedades">
            <div class="texto-container">
                <h3>Novedades</h3>
            </div>

            <div class="tarjetas-container">

                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/novedad1.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">PSICODROMO</p>
                        <p>Andahazi, Federico</p>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/novedad2.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">EN AGOSTO NOS VEMOS</p>
                        <p>Garcia Marquez, Gabriel</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/novedad3.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">CORA</p>
                        <p>Fernandez Diaz, Jorge</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/novedad4.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">UN LUGAR SOLEADO PARA GENTE SOMBRIA</p>
                        <p>Enriquez, Mariana</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/novedad5.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">ANTES DE QUE SE ENFRIE EL CAFE</p>
                        <p>Toshikazu, Kawaguchi</p>
                    </div>
                    
                </div>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="imagenes/novedad6.jpg">
                    </div>
                    <div class="tarj-txt">
                        <p class="titulo">EL NIÑO RESENTIDO</p>
                        <p class="autor">Gonzalez, Cesar</p>
                    </div>
                    
                </div>
            </div>
            
        </section>

        <section class="container-libros" id="recomendados">
            <div class="texto-container">
                <h3>Recomendados</h3>
            </div>
            <div class="tarjetas-container">
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="imagenes/recomendado1.jpg">
                        </div>
                        <div class="tarj-txt">
                            <p class="titulo">HACKEA TU CEREBRO</p>
                            <p>Fernandez Miranda, Nicolas</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="imagenes/recomendado2.jpg">
                        </div>
                        <div class="tarj-txt">
                            <p class="titulo">AYUNAR PARA SANAR</p>
                            <p>Dra. Mindy Pelz</p>
                        </div>
                        
                    </div>
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="imagenes/recomendado3.jpg">
                        </div>
                        <div class="tarj-txt">
                            <p class="titulo">COMO MANIFESTAR</p>
                            <p>Thackray, Gill</p>
                        </div>
                        
                    </div>
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="imagenes/recomendado4.jpg">
                        </div>
                        <div class="tarj-txt">
                            <p class="titulo">EL CAMINO DEL DUELO</p>
                            <p>Don Miguel Ruiz</p>
                        </div>
                        
                    </div>
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="imagenes/recomendado5.jpg">
                        </div>
                        <div class="tarj-txt">
                            <p class="titulo">LAS CARTAS DE HECHIZOS DE LA BRUJA</p>
                            <p>Geenleaf, Cerridwen</p>
                        </div>
                        
                    </div>
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="imagenes/recomendado6.jpg">
                        </div>
                        <div class="tarj-txt">
                            <p class="titulo">SUEÑOS</p>
                            <p class="autor">Parra, Alejandro</p>
                        </div>
                        
                    </div>
            </div>
            
        </section>
        
    </main>

    
    <footer>
        <!-- Grid container -->
        <div class="superior">
            <ul class="redes-sociales">
                <li><img src="imagenes/faceLogo.png" width="40px"></li>
                <li><img src="imagenes/twitterLogo.png" width="40px"></li>
                <li><img src="imagenes/instaLogo.png" width="40px"></li>
                <li><img src="imagenes/ytLogo.png" width="40px"></li>
                <li><img src="imagenes/linkLogo.png" width="40px"></li>
            </ul>
        
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="inferior">
          <p>© 2024 All Rights Reserved || Design by <a href="https://github.com/LuarCes">Cecilia Cordeiro</a> - <a href="https://github.com/diegogg89">Diego González</a> - <a href="https://github.com/EzequielDeiana">Ezequiel González</a> - <a href="https://github.com/grey-16">Grey Ortega</a> </p>
          
        </div>
        <!-- Copyright -->
    </div>
    </footer>
    
</body>
</html>