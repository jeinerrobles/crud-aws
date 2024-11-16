<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
</head>
<body>
<h1>Editar Persona</h1>
<a href="{{ route('personas.index') }}">Regresar a la lista</a>
<form action="{{ route('personas.update', $persona->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="id">ID (no editable):</label>
    <input type="text" name="id" id="id" value="{{ $persona->id }}" readonly>
    <br>
    <label for="nombre1">Primer Nombre:</label>
    <input type="text" name="nombre1" id="nombre1" value="{{ $persona->nombre1 }}" maxlength="20" required>
    <br>
    <label for="nombre2">Segundo Nombre:</label>
    <input type="text" name="nombre2" id="nombre2" value="{{ $persona->nombre2 }}" maxlength="30">
    <br>
    <label for="apellido1">Primer Apellido:</label>
    <input type="text" name="apellido1" id="apellido1" value="{{ $persona->apellido1 }}" maxlength="20" required>
    <br>
    <label for="apellido2">Segundo Apellido:</label>
    <input type="text" name="apellido2" id="apellido2" value="{{ $persona->apellido2 }}" maxlength="30">
    <br>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" value="{{ $persona->direccion }}" maxlength="100">
    <br>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono" value="{{ $persona->telefono }}" maxlength="10">
    <br><br>
    <button type="submit">Actualizar Persona</button>
</form>
</body>
</html>
