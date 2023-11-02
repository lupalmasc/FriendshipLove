@extends ('layouts.layout')
@section ('content')

<style>
        body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                margin-top: 100px;
        }

        .titulo {
                font-size: 24px;
                font-weight: bold;
        }

        .contenedor {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                margin-top: 20px;
                width: 100%;
                position: absolute;
                height: 100%;
        }

        .izquierda,
        .derecha {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
        }

        .circulo {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                background-color: #3498db;
                display: flex;
                align-items: center;
                justify-content: center;
        }

        .circulo img {
                width: 200px;
                height: 200px;
        }

        .boton {
                margin-top: auto;
                padding: 10px 20px;
                background-color: #27ae60;
                color: #fff;
                border: none;
                cursor: pointer;
        }

        form {
                margin-top: 20px;
                text-align: center;
        }
        header¨{
                position: fixed;
        }
</style>

<div>
        <div class="usuario">
                <div class="circulo">
                        <img src="usuario.png" alt="Imagen">
                        <h1>usuarios</h1>

                        <tr>
                                <a href="{{route('users.create')}}">Crear nuevo usuario</a>

                                <td>Nombre de usuario</td>

                                <td>Contraseña del usuario </td>

                                <button class="boton">Comenzar</button>

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
                </div>
                <div class="grupos">
                        <div class="derecha">
                                <div class="circulo">
                                        <img src="grupos.png" alt="Imagen">
                                </div>
                                <h1>grupos</h1>

                                <a href="{{route('grupos.create')}}">Crear nuevo grupo</a>

                                <td>Nombre del Grupo</td>
                                <td>Tematica </td>
                                <td>Orientacion Sexual </td>
                                <td>Descripcion del Grupo</td>
                                <td>Cantidad de Personas</td>

                                <button class="boton">Comenzar</button>

                                <table>
                                        @foreach($grupos as $grupo)
                                        <tr>


                                                <td>{{$grupo->nombre}}</td>
                                                <td>{{$grupo->tematica}}</td>
                                                <td>{{$grupo->orientacion_sexual}}</td>
                                                <td>{{$grupo->descripcion}}</td>
                                                <td>{{$grupo->cantidad_personas}}</td>


                                        </tr>
                                        @endforeach

                                </table>
                        </div>
                </div>
                @endsection

                <div class="contenedor">
                        <div class="izquierda">
                                <div class="circulo">
                                        <img src="C:\Users\Luci\FriendshipLove\FriendshipLove\public\images\usuario.png.png" alt="Imagen">
                                        <button class="boton">Comenzar</button>
                                </div>

                        </div>
                        <div class="derecha">
                                <div class="circulo">
                                        <img src="grupos.png" alt="Imagen">
                                </div>

                                <button class="boton">Comenzar</button>
                        </div>