<?php  
session_start();
if (isset($_SESSION["id"])){

        include ("conexion.php"); //conexion a la base de datos
        
        if (empty($_SESSION['id'])){
            echo "DEBE INICIAR SESION";
            header ("location:iniciaSesion.html");
        }else{
            $id = $_SESSION['id']; 
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>🌟 Modificá Usuario - Polaris 🌟</title>
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
                    <a href="index.php"><img src="imagenes/logo.png" width="45%"></a> 
                </div>
                <div class="buscador-container">
                    <input type="search" class="form-control" name="s" id="" placeholder="Buscar producto..." required="">
                </div>
                
                <div class="botones-container">
                    <ul class="header-list">
                        <li><img src="imagenes/carrito.png" width="35px"></li>
                        <li><img src="imagenes/amor.png" width="35px"></li>
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
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="">Conexion API</a></li>
                    <li><a href="registroLibros.php">Registro Libros</a></li>
                    <li><a href="mostrarLibros.php">Ver Libros Registrados</a></li>
                </ul>
            </nav>

        </header>

        <section class="registro-libro">
            
            <?php 
                $query="select * from usuario where id='$id'";

                if ($result = mysqli_query($conexion,$query)){
                    $row = mysqli_fetch_array($result);          
            ?>
                <form action="updateUsuario.php" method="POST" class="formulario formulario-libro" id="form-libro">
                    <h1><b>Modificá tus Datos</b></h1>
                    <div>
                        <div>
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
                            <div>
                            <input class="completar" type="text" name="email"  id="email" placeholder="email" value="<?php echo $row['email'];?>" disabled />
                            <div class="error-text"></div>
                        </div>
                            <input class="completar"  type="text" name="nombre" placeholder="Nombre" id="nombre" value="<?php echo $row['nombre'];?>" autofocus/>
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php echo $row['apellido']?>"/>                            
                            <div class="error-text"></div>
                        </div>
                        <div>
                            <input class="completar" type="number" min ="18" max="99" name="edad" placeholder="Edad" value="<?php echo $row['edad'];?>" id="edad" />
                            <div class="error-text"></div>
                        </div>
                        
                        <div>
                            <input class="completar" type="text" name="pass" placeholder="pass" value="<?php echo $row['pass'];?>" id="pass"/>
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
    header ("location:iniciaSesion.html");
}


?>