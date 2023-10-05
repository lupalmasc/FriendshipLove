<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Roles</h1>
            <tr>
            <a href="{{route('roles.create')}}">Crear nuevo rol</a>

    <td>Nombre del rol</td>


    

  </tr>
    <table>
            @foreach($roles as $rol)
            <tr>
        
            <td>{{$rol->name}}</td>
            </tr>
            @endforeach

    </table>
</body>
</html> 