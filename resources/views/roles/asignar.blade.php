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

    <h2>Roles</h2>
    <a href="{{ route('roles.index') }}">Volver</a>
    <table class="Tinder">

        <tr>

            <td>Nombre del Rol: {{$role->name}}</td>


        </tr>
        @foreach ($permisos as $permiso)
            <tr>

                <td>{{ $permiso->name}} <input type="checkbox" name="perm" value="{{$permiso->id}}"></td>
             

            </tr>
        @endforeach

</body>

</html>