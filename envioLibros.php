<?php  
    include ("conexion.php");
?>

<!--Validación e inserción de datos ----------------------------------->

<?php


    if(isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['genero']) && isset($_POST['calificacion']) && isset($_POST['anio']) && isset($_POST['editorial']) && isset($_POST['lenguaje'])){

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $calificacion = $_POST['calificacion'];
        $anio = $_POST['anio'];
        $editorial = $_POST['editorial'];
        $lenguaje = $_POST['lenguaje'];

        if(empty($titulo) || empty($autor) || empty($genero) || empty($calificacion) || empty($anio) || empty($editorial) || empty($lenguaje)){

            echo "DEBE COMPLETAR TODOS LOS CAMPOS"; ?>
            <script>setTimeout(function(){ window.history.back(); }, 1000);   </script>
<?php 
    
    }else{
        //query para insertar los datos --------------------------------

        $insertarLibro =  "insert into libro(titulo,autor,genero,calificacion,anio,editorial,lenguaje) values('$titulo','$autor','$genero','$calificacion','$anio','$editorial','$lenguaje')";

        mysqli_query($conexion,$insertarLibro);
        header('Location: mostrarLibros.php'); //redireccion a pagina mostrar Libros

            exit;

    }
}

?>

