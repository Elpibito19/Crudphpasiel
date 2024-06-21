<?php 

    require_once "Conexion.php";
    
    $id=$_GET['id'];
   

    $c= new conectar();
	$conexion=$c->conexion();
    $sql="DELETE FROM tablacrud WHERE id='$id'";
    $result=mysqli_query($conexion,$sql);
    

    if(!$result){
        echo "No se puedo eliminar";
    }
    else{
        header("Location: index.php");
    }
?>