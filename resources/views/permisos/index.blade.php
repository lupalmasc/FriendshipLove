<html>
<meta>

</meta>

<body>
    <h1>FRIENDSHIPLOVE</h1>
    <a href="{{route('permisos.create')}}">Crear nuevo permiso</a>
   <table class="Tinder">

  <tr>

    <td>Nombre</td>

    <td> tipo de permiso </td>

    

  </tr>
  @foreach($permisos as $permiso)
  <tr>

    <td>{{$permiso->name}}</td>

    <td>{{$permiso->guard_name}}</td>

    

  </tr>
  @endforeach
</body>

</html>