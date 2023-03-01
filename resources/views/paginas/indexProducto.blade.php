<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pintura</title>
</head>
<body>
    <h1>Productos</h1>
    <a href="{{ route('pintura.create')}}">Agregar producto</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pinturas as $pintura)
                <tr>
                    <td>{{ $pintura->id }}</td>
                    <td>{{ $pintura->nombre }}</td>
                    <td>{{ $pintura->descripcion }}</td>
                    <td>{{ $pintura->precio }}</td>
                    <td><a href="{{ route('pintura.show', $pintura->id) }}">Ver detalles</a></td>
                    <td><a href="{{ route('pintura.edit', $pintura->id) }}">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>