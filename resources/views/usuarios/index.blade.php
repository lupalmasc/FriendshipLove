<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>usuarios</h1>
            <tr>
            <a href="{{route('users.create')}}">Crear nuevo usuario</a>

    <td>Nombre de usuario</td>

    <td>Contraseña del usuario </td>

    

  </tr>
    <table>
            @foreach($usuarios as $usuario)
            <tr>
        
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->edad}}</td>
            <td>{{$usuario->sexo}}</td>
            <td>{{$usuario->orientacion_sexual}}</td>
            <td>{{$usuario->descripcion}}</td>

            </tr>
            @endforeach

    </table>
    <h1>grupos</h1>
    <table>
            @foreach($grupos as $grupos)
            <tr>
            <td>{{$grupo->nombre}}</td>
            <td>{{$grupo->tematica}}</td>
            <td>{{$grupo->orientacion_sexual}}</td>
            <td>{{$grupo->descripcion}}</td>
            <td>{{$grupo->cantidad_personas}}</td>
            

            </tr>
            @endforeach

    </table>
</body>
</html> 