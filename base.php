<?php
include 'conexion.php';
$nombre =$_POST['usuario'];
$clave =$_POST['clave'];
$correo =$_POST['correo'];

 $resultado = mysqli_query($conexion,$consulta="SELECT *FROM usuario where nombre ='$nombre' and clave='$clave' ");

 $filas=mysqli_num_rows($resultado);

 if ($filas) {
    echo '<script> alert ("Bienvenido al sistema ");</script>';
    header ("location:index.html");

 }else{
    echo '<script> alert ("Error al Entrar sistema ");</script>';
 }

 mysqli_close($conexion);
 mysqli_free_result($resultado);
?>



<!--
$consulta ="SELECT * from  usuario ='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows ($resultado);
if ($filas >0){

    echo'<script>
    alert header ("Location:index.html")("bienvendo al sistema");
    </script>';

    


}else{

    echo'<script>  alert ("error al entrar sistema");
    window.history.go(-1);
    </script>';
    }

mysqli_free_result ($resultado);
mysqli_close ($conexion);

-->

?>
-->