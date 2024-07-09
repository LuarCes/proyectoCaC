<?php  //comprobar si existe un inicio de sesion
session_start();
if (isset($_SESSION["id"])){
    require("conexion.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌟  Libros - Polaris 🌟</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--ALERT DE CONFIRMACION PARA ELIMINAR UN REGISTRO-->
    <script language="JavaScript">
        function confirmar(url){
        if (!confirm("¿Está seguro de eliminar el registro?")) {
            return false;
        }else{
            document.location= url;
            return true;
            }
        }
        </script>

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
                    <li><img src="imagenes/carrito.png" width="35px"></li>
                    <li><img src="imagenes/amor.png" width="35px"></li>
                    <li><a  href="editarUsuario.php"><img alt="" src="imagenes/editarUsuario.webp" width="34px"></a></li>
                    <li><a  href="cerrarSesion.php"><img src="imagenes/cerrarSesion.png" width="34px"></a></li>
                </ul>
            </div>
               

        </nav>
        <nav class="navegador">
            <ul class="opciones">
            <h5>¡Hola!, <?php echo  $_SESSION["nombre"] ?></h5>
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


<body>

    <div class="mostrarTabla">
        <table class="table">
            <h1 class="text-white" style = "text-align:center">Libros Registrados</h1>
            <thead>
                <tr>
                    <th class="text-white" scope="col">Título</th>
                    <th class="text-white" scope="col">Autor</th>
                    <th class="text-white" scope="col">Género</th>
                    <th class="text-white" scope="col">Calificación </th>
                    <th class="text-white" scope="col">Año </th>
                    <th class="text-white" scope="col">Editorial </th>
                    <th class="text-white" scope="col"> Idioma</th>
                    <th class="text-white" scope="col"></th>
                    <th class="text-white" scope="col"> <button type="button" class="btn btn-light" onclick="location.href = 'registroLibros.php'" value="">Registrar Libro</button></th>
                </tr>
            </thead>
            <tbody>

<?php
            $query = "select * from libro"; //query para traer todos los datos de la tabla libro
            
            if ($result = mysqli_query($conexion,$query)) { 
                while ($row =mysqli_fetch_assoc($result)) { 
                    $id = $row["id"];
                    $titulo = $row["titulo"];
                    $autor = $row["autor"];
                    $genero = $row["genero"];
                    $calificacion = $row["calificacion"];
                    $anio = $row["anio"]; 
                    $editorial = $row["editorial"];
                    $idioma = $row["lenguaje"];  

                    echo '<tr> 
                            <td class="text-white">'.$titulo.'</td> 
                            <td class="text-white">'.$autor.'</td> 
                            <td class="text-white">'.$genero.'</td> 
                            <td class="text-white">'.$calificacion.'</td> 
                            <td class="text-white">'.$anio.'</td> 
                            <td class="text-white">'.$editorial.'</td> 
                            <td class="text-white">'.$idioma.'</td> 
                            <td class="text-white"><a href=modificar.php?id='.$id.'><img src="imagenes/iconoEditar.jpg" width="30px"></a></td> 
                            ';?>
                            <td class="text-white"><a href="javascript:;" onclick="confirmar('eliminar.php?id=<?php echo $id?>'); return false;"><img src="imagenes/iconoEliminar.png" width="30px"></a></td>
                            </tr>
<?php
                }
            }

?>
            </tbody>
        </table>
         
    </div>
</body>

</html>


<?php   
}else{
    header ("location:iniciaSesion.html");
}
?>