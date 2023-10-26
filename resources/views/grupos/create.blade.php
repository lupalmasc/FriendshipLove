<html>
<meta>

</meta>

<body>
    <h1>Crear nuevo Grupo</h1>
    <form method="POST" action="{{ route('grupos.store') }}">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre">
         <input type="text" name="tematica" placeholder="Tematica">
         <input type="text" name="orientacion_s" placeholder="Orientacion Sexual">
         <input type="text" name="descripcion" placeholder="Descripcion del Grupo">
         <input type="number" name="cant_personas" placeholder="Cantidad de Personas">
         
                            <input type="submit" value="Cargar">
    </form>
</body>
