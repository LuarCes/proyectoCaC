<?php  
    include ("conexion.php");
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

</head>
<body id="iniciarSesion">
    
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
                <li><a href="registroLibros.html">Registro Libros</a></li>
            </ul>
        </nav>
    </header>


<body>
    <div class="mostrarTabla">
        <table class="table">
            <h1 class="text-white">Libros Registrados</h1>
            <thead>
                <tr>
                    <th class="text-white" scope="col">Título</th>
                    <th class="text-white" scope="col">Autor</th>
                    <th class="text-white" scope="col">Género</th>
                    <th class="text-white" scope="col">Calificación </th>
                    <th class="text-white" scope="col">Año </th>
                    <th class="text-white" scope="col">Editorial </th>
                    <th class="text-white" scope="col"> Idioma</th>
                </tr>
            </thead>
            <tbody>

<?php
            $query = "select * from libro"; //query para traer todos los datos de la tabla libro
            
            if ($result = mysqli_query($conexion,$query)) {
                while ($row = $result->fetch_assoc()) {
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
                        </tr>';
                }
            }

?>
            </tbody>
        </table>

    </div>

</body>

</html>