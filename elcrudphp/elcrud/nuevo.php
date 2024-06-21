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
        <h1>Crud PHP</h1>
        <form action="agregar.php" method="post">
            <table>
                <tr>
                    <td>Ingresa sus datos</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id="apellido"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>