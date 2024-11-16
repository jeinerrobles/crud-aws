<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
<h1>Crear Nueva Persona</h1>
<a href="{{ route('personas.index') }}">Regresar a la lista</a>
<form action="{{ route('personas.store') }}" method="POST">
    @csrf
    <label for="id">ID (único):</label>
    <input type="text" name="id" id="id" maxlength="50" required>
    <br>
    <label for="nombre1">Primer Nombre:</label>
    <input type="text" name="nombre1" id="nombre1" maxlength="20" required>
    <br>
    <label for="nombre2">Segundo Nombre:</label>
    <input type="text" name="nombre2" id="nombre2" maxlength="30">
    <br>
    <label for="apellido1">Primer Apellido:</label>
    <input type="text" name="apellido1" id="apellido1" maxlength="20" required>
    <br>
    <label for="apellido2">Segundo Apellido:</label>
    <input type="text" name="apellido2" id="apellido2" maxlength="30">
    <br>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" maxlength="100">
    <br>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono" maxlength="10">
    <br><br>
    <button type="submit">Guardar Persona</button>
</form>
</body>
</html>
