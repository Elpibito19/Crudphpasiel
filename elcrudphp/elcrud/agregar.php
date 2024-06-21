<?php 

    require_once "Conexion.php";
    

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    $c= new conectar();
	$conexion=$c->conexion();
    $sql="INSERT INTO tablacrud (nombre,apellido) VALUES ('$nombre','$apellido')";
    $result=mysqli_query($conexion,$sql);
    

    if(!$result){
        echo "No se puedo guardar";
    }
    else{
        header("Location: index.php");
    }
?>