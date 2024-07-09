<?php

    session_start();
    if (isset($_SESSION["id"])){
        session_unset();
        session_destroy();
        header("location:index.php");
    }else{
        echo "NO HA INICIADO SESION";

        header("location:iniciaSesion.html");
    }

?>