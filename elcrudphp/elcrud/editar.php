<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="estilo.css"> 
    <title>Document</title> 
</head>

<body>
<?php   
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];

?> 
    <div class="contact_from"> 
        <div class="formulario"> 
            <h1>formulario de contacto</h1> 
            <h3>Escribenos y en breve los pondremos en contacto contigo</h3>
        <form action="actualizar.php" method="post">
            <table>
                <tr>    
                    <td>Editar los datos</td>
                </tr>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" id="id" value="<?=$id ?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre" value="<?=$nombre ?>"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id="apellido" value="<?=$apellido ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>