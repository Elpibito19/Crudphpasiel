<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="estilo.css"> 
    <title>Document</title> 
</head>

<body>
    <div class="contact_from"> 
        <div class="formulario"> 
        <div class="container">
			<h1>Crud PHP</h1>
			<div class="row">
				<div class="col-sm-4">
                    <form action="buscar.php" method="post">
						<label>Buscar</label>
						<input type="text" class="form-control input-sm" name="buscar" id="">
                        <input type="submit" value="Buscar">
						<p></p>
						<a class="btn btn-primary" href="nuevo.php">Nuevo</a>
					</form>
				</div>
				<div class="col-sm-6">
					<div id="tablaCategoriaLoad"></div>
				</div>
			</div>
		</div>

    <div class="container">
        <div class=""></div>
        

            
            
            

        </form>
    </div>

    <div>
        <table>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php 
            
                require_once "Conexion.php";
                $c=new conectar();
                $conectar=$c->conexion();
                $sql="SELECT id,nombre,apellido FROM tablacrud";
                $result=mysqli_query($conectar,$sql);

                while($mostrar=mysqli_fetch_row($result)):
            ?>
                    <tr>
                        <td><?php echo $mostrar['0']; ?></td>
                        <td><?php echo $mostrar['1']; ?></td>
                        <td><?php echo $mostrar['2']; ?></td>
                        <td><a href="editar.php?
                        id=<?php echo $mostrar['0']; ?> &
                        nombre=<?php echo $mostrar['1']; ?> &
                        apellido=<?php echo $mostrar['2']; ?> 
                        ">Editar</a></td>
                        <td><a href="eliminar.php ?
                        id=<?php echo $mostrar['0'];?> ">Eliminar</a></td>
                    </tr>

            <?php endwhile;?>
        </table>
    </div>









</body>
</html>