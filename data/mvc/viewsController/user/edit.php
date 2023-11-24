<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edicion de usuario</h1>

    <form method="post" action="/user/update"> <!--La ruta- se cambia-->
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" value="<?= $user->name?>" class="form-control"> <!--Al poner $user->name, cuando cambiamos la url, se pondran los datos automaticamente -->
    </div>
    <br>
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="surname" value="<?= $user->surname?>" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?= $user->email?>" class="form-control">
    </div>
    <br> 
    <div class="form-group">
        <label>Fecha cumpleaños</label>
        <input type="date" name="birthdate" value="<?= $user->birthdate?>" class="form-control">
    </div>
    <br>

    <!--recoja datos-->
    <input type="hidden" name="id" value="<?=$user->id?>">

    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</body>
</html>