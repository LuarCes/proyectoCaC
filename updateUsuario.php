
<!--Validación e inserción de datos ----------------------------------->

<?php
session_start();
 require ("conexion.php");

     if( isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['pass']) ){    
       
        $id= $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $pass = $_POST['pass'];
        //$email = $_POST['email'];

        if(empty($nombre) || empty($apellido) || empty($edad) || empty($pass)  ){

            echo "DEBE COMPLETAR TODOS LOS CAMPOS"; ?>
            <script>setTimeout(function(){ window.history.back(); }, 1000);   </script>
<?php 
    
        }else{
            //query para insertar los datos --------------------------------

            $updateUsuario =  "update usuario set  nombre='$nombre', apellido='$apellido', edad='$edad',pass='$pass' where id='$id'";

            mysqli_query($conexion,$updateUsuario);
            header('Location: mostrarLibros.php'); //redireccion a pagina mostrar Libros

                exit;

        }
    }else{
       
       echo "NO SE PUDO MODIFICAR EL REGISTRO";?>
        <script>setTimeout(function(){ window.history.back(); }, 1000); </script>
 <?php
 
    }