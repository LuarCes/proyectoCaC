<?php

    if (isset($_GET["id"])){

        require("conexion.php"); //conexion a la base de datos
        
        if (!empty($_GET["id"])){
            
            $id=$_GET["id"];
            $query= "DELETE FROM libro WHERE id='$id'"; //query para eliminar el registro
            mysqli_query($conexion,$query);
            header('Location: mostrarLibros.php'); //redireccion a pagina mostrar Libros
            

        }else{
            echo "No existe el registro";
        }
    }else{
        echo "No existe el id";
    }
