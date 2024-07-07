<?php  
session_start();
if (isset($_SESSION["id"])){

    if (isset($_GET['id'])){

        include ("conexion.php"); //conexion a la base de datos
        
        if (empty($_GET['id'])){
            echo "No existe el registro";
        }else{
             $id = $_GET['id'];  
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>🌟 Modificá Libros - Polaris 🌟</title>
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
                    <li><a href="index.html#novedades">Libros</a></li>
                    <li>Agendas</li>
                    <li ><a href="index.html#mas-vendidos">Más vendidos</a></li>
                    <li>Nosotros</li>
                    <li><a href="conexionAPI.html">Conexion API</a></li>
                    <li><a href="registroLibros.php">Registro Libros</a></li>
                </ul>
            </nav>

        </header>

        <section class="registro-libro">
            
            <?php 
                $query="select * from libro where id='$id'";

                if ($result = mysqli_query($conexion,$query)){
                    $row = mysqli_fetch_array($result);          
            ?>
                <form action="update.php" method="POST" class="formulario formulario-libro" id="form-libro">
                    <h1><b>Modificar Libro</b></h1>
                    <div>
                        <div>
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
                            <input class="completar"  type="text" name="titulo" placeholder="Título" id="titulo" value="<?php echo $row['titulo'];?>" autofocus/>
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="text" name="autor" id="autor" placeholder="Autor" value="<?php echo $row['autor']?>"/>                            
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="text" name="genero"  id="genero" placeholder="Género" value="<?php echo $row['genero'];?>"/>
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="number" min ="1" max="5" name="calificacion" placeholder="Calificacion" value="<?php echo $row['calificacion'];?>" id="calificacion" />
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="number" name="anio" placeholder="Año de Publicación" value="<?php echo $row['anio'];?>" id="anio"/>
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="text" name="editorial" placeholder="Editorial" value="<?php echo $row['editorial'];?>" id="editorial"/>
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <select name="lenguaje" id="lenguaje" placeholder="Idioma" class="idiomas" style="width: 50%; height: 25%;" >
                                <option value="<?php echo $row['lenguaje'];?>" selected><?php echo $row['lenguaje'];?></option>
                                <option disabled>--Seleccione un Idioma--</option>
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
                        <input class="btn_buscar_libro" type="button" onclick="history.back()" value="Regresar" />
                        <input class="btn_buscar_libro" type="submit" value="Modificar" id="modificar" name="modificar "/>
                    </div>   
                </form>
            
            <?php 
                 }
            ?>
        </section>

        <script src="js/registroLibros.js"></script>
        <script src="js/confirmaModificar.js"></script>


    </body>
    </html>

<?php 
        }

    }else{
        echo "Error, no se pudo modificar";?>
         <script>setTimeout(function(){ window.history.back(); }, 1000); </script>
<?php 
    }

}else{
    header ("location:iniciaSesion.html");
}


?>