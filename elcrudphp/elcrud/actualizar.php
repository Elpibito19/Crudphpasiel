<?php 

    require_once "Conexion.php";
    
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    $c= new conectar();
	$conexion=$c->conexion();
    $sql="UPDATE tablacrud SET nombre='$nombre',apellido='$apellido' WHERE id='$id'";
    $result=mysqli_query($conexion,$sql);
    

    if(!$result){
        echo "No se puedo actualizar";
    }
    else{
        header("Location: index.php");
    }
?>