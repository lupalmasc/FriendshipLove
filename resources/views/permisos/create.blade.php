<html>
<meta>

</meta>

<body>
    <h1>Crear nuevo permiso</h1>
    <form method="POST" action="{{ route('permisos.store') }}">
        @csrf

        <input type="text" name="permiso" placeholder="Nombre del Permiso">
        <input type="submit" value="Cargar">
    </form>
</body>

</html>
