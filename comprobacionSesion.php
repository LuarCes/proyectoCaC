<?php

    if (isset($_POST["email"]) && isset($_POST["password"])){
        
        require("conexion.php");
        session_start();
        
        if (!empty($_POST["email"]) && !empty($_POST["password"])){
            
            $email=$_POST["email"];
            $password=($_POST["password"]);

            $query="SELECT * FROM usuario WHERE email='$email' ";
            $result = mysqli_query($conexion,$query);
            $numrow = mysqli_num_rows($result);

            if ($numrow!=0){
                if ($row = mysqli_fetch_assoc($result)){
                    $pass=$row["pass"];
                
                }
                if ($pass==$password){
                    $_SESSION['id']=$row['id'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['nombre']=$row['nombre'];
                    $_SESSION['apellido']=$row['apellido'];
                    header("location:mostrarLibros.php");
                }else{
                    echo "LA CONTRASEÑA ES INCORRECTA"; ?>
                    <script>setTimeout(function(){ window.history.back(); }, 1000);   </script>
<?php
                }
                
            }else{
                echo "EL EMAIL ES INCORRECTO"; ?>
                    <script>setTimeout(function(){ window.history.back(); }, 1000);   </script>
<?php
            }
        }else{
            echo "DEBE LLENAR TODOS LOS CAMPOS";
            header ("location:iniciaSesion.html");
        }

    }else{
        header ("location:iniciaSesion.html");
    }




?>
