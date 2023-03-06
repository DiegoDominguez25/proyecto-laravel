<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver detalles</title>
</head>
<body>
    <h1>Detalles del producto</h1>
    <h3> {{ $pintura->nombre  }} </h3>
    <h3> {{ $pintura->descripcion }} </h3>
    <h3> {{ $pintura->precio }} </h3>

    <form action="{{ route('pintura.destroy', $pintura) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>

    </form>
</body>
</html>