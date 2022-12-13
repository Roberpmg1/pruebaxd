<?php

$conexion = mysqli_connect("localhost", "root", "", "registro");

if (!$conexion){

echo "se ha prooducido un  error al conectarse".mysql_error();
}
else{

    echo "se ha conectado correctamente";
}
?>