<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>

<body>

    <h1>FRIENDSHIPLOVE</h1>
 <a href="{{ route('roles.index') }}">Volver</a>
    <h2>Crear rol</h2>
    <form method="POST" action="{{ route('roles.store') }}">
    <table class="Tinder">
    @csrf


        <input type="text" name="rol" placeholder="Nombre del rol">
        <input type="submit" value="Cargar">
        </table>
        </form>
</body>

</html>