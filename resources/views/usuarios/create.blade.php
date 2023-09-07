<html>
<meta>

</meta>

<body>
    <h1>Crear nuevo usuario</h1>
    <form method="POST" action="{{ route('users.create') }}">
        @csrf

        <input type="text" name="user" placeholder="Nombre del usuario">
         <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Cargar">
    </form>
</body>

</html>