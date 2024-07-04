<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌟 Registrá Libros - Polaris 🌟</title>
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
<body id="registrarLibro">
    
    <header class="encabezado">
        <nav class="header-nav">
            <div class="logo-container"> 
                <a href="index.html"><img src="imagenes/logo.png" width="45%"></a> 
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
                <li><a href="index.html">Inicio</a></li>
                <li>Libros</li>
                <li>Agendas</li>
                <li>Más vendidos</li>
                <li>Nosotros</li>
                <li><a href="conexionAPI.html">Conexion API</a></li>
                <li><a href="registroLibros.php">Registro Libros</a></li>
            </ul>
        </nav>

    </header>

    <section class="registro-libro">
        
        <form action="envioLibros.php" method="post" class="formulario formulario-libro" id="form-libro">
            <h1><b>Registrá tus Libros</b></h1>
            <div>
                <div>
                    <input class="completar"  type="text" name="titulo" placeholder="Título del libro" id="titulo"/>
                    <div class="error-text"></div>
                </div>
                <div>
                    <input class="completar" type="text" name="autor" placeholder="Autor" id="autor"/>
                    <div class="error-text"></div>
                </div>
                <div>
                    <input class="completar" type="text" name="genero" placeholder="Género" id="genero"/>
                    <div class="error-text"></div>
                </div>
                <div>
                    <input class="completar" type="number" min ="1" max="5" name="calificacion" placeholder="Calificación" id="calificacion" />
                    <div class="error-text"></div>
                </div>
                <div>
                    <input class="completar" type="number" name="anio" placeholder="Año de publicación" id="anio"/>
                    <div class="error-text"></div>
                </div>
                <div>
                    <input class="completar" type="text" name="editorial" placeholder="Editorial" id="editorial"/>
                    <div class="error-text"></div>
                </div>
                <div>
                    <select name="lenguaje" id="idioma" class="idiomas" style="width: 50%; height: 25%;" id="idioma">
                        <option value="" disabled selected>--Seleccionar idioma--</option>
                        <option value="español">Español </option>
                        <option value="ingles">Inglés</option>
                        <option value="aleman">Alemán</option>
                        <option value="frances">Francés</option>
                        <option value="italiano">Italiano</option>
                        <option value="portugues">Portugués</option>
                        <option value="chino">Chino</option>
                    </select>
                    <div class="error-text"></div>
            </div>
            </div>
            <div> 
                <input class="btn_buscar_libro" type="submit" value="Enviar" />
            </div>   
        </form>
      </section>

      <script src="js/registroLibros.js"></script>


</body>
</html>