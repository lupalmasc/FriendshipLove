<html>
<meta>

</meta>

<body>
    <h1>Crear nuevo usuario</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre">
         <input type="text" name="apellido" placeholder="Apellido">
         <input type="number" name="edad" placeholder="Edad">
         <input type="number" name="dni" placeholder="D.N.I">
         <input type="number" name="telefono" placeholder="Telefono">
         <input type="text" name="sexo" placeholder="Sexo">
         <input type="text" name="descripcion" placeholder="Descripcion">
         <input type="text" name="orientacion_sexual" placeholder="Orientacion sexual">
         <input type="email" name="email" placeholder="Correo electronico">
         <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Cargar">
    </form>
</body>

</html>