<!DOCTYPE html>
<html>
<head>
    <title>Personas</title>
</head>
<body>
<h1>Lista de Personas</h1>
<a href="{{ route('personas.create') }}">Crear Nueva Persona</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre Completo</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->id }}</td>
            <td>{{ $persona->nombre1 }} {{ $persona->nombre2 }} {{ $persona->apellido1 }} {{ $persona->apellido2 }}</td>
            <td>{{ $persona->direccion }}</td>
            <td>{{ $persona->telefono }}</td>
            <td>
                <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>
                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
