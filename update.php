
<!--Validación e inserción de datos ----------------------------------->

<?php
 include ("conexion.php");

     if(isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['genero']) && isset($_POST['calificacion']) && isset($_POST['anio']) && isset($_POST['editorial']) && isset($_POST['lenguaje'])){    
       
        $id= $_POST['id'];
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

            $updateLibro =  "update libro set  titulo='$titulo', autor='$autor', genero='$genero',calificacion='$calificacion', anio='$anio', editorial='$editorial', lenguaje='$lenguaje' where id='$id'";

            mysqli_query($conexion,$updateLibro);
            header('Location: mostrarLibros.php'); //redireccion a pagina mostrar Libros

                exit;

        }
    }else{
       
       echo "NO SE PUDO MODIFICAR EL REGISTRO";?>
        <script>setTimeout(function(){ window.history.back(); }, 1000); </script>
 <?php
 
    }

?>