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
  
    <table class="Tinder">

        <tr>

            <td>Nombre del Rol</td>


        </tr>
        @foreach ($roles as $role)
            <tr>

                <td>{{ $role->name}}</td>
                <a id="crearpermiso" href="{{ route('roles.create', $role->id) }}">
                    <button>Crear permisos</button>
                </a>

            </tr>
        @endforeach

</body>

</html>
