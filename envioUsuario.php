

<?php

//-------Validación e inserción de datos ----------------------------------->

require ("conexion.php");

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['edad']) && isset($_POST['pass']) && isset($_POST['pass2'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if(empty($nombre) || empty($apellido) || empty($email) || empty($edad) || empty($pass) || empty($pass2)){

        echo "DEBE COMPLETAR TODOS LOS CAMPOS"; ?>
        <script>setTimeout(function(){ window.history.back(); }, 1000);   </script>
<?php    

    }else{

        if ($pass!=$pass2){
            echo "LAS CONTRASEÑAS NO COINCIDEN"; ?>
            <script>setTimeout(function(){ window.history.back(); }, 1000);   </script>
<?php
    
        }else{
            //inserta el usuario en la base de datos
            $insertarUsuario =  "insert into usuario(nombre,apellido,email,edad,pass) values('$nombre','$apellido', '$email','$edad','$pass')";
            $result = mysqli_query($conexion,$insertarUsuario);

            header('Location: index.php'); //redireccion a pagina Inicio

            exit;

            }

            
        }
        
       

    }

?>




