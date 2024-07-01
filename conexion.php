<?php

$conexion = mysqli_connect("localhost","root","","polaris");

if(mysqli_connect_errno()){
    echo "ERROR no se conecto: ". mysqli_connect_errno();
}
