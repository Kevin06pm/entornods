<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalle de usuario</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Volver</th>
        </tr>
        <tr>
            <td><?php echo $user[0]?></td>
            <td><?php echo $user[1]?></td>
            <td><a href="?method=index">Volver al Inicio</a></td>
        </tr>
    
    </table>
    <hr>


</body>
</html>