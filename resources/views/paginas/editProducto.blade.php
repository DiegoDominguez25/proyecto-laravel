<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>
    <h1>Editar producto</h1>

    <form action="{{ route('pintura.update', $pintura) }}" method="POST">
        @method('PUT')
        @csrf
            <br> <br>
            <label for="nombre">Nombre</label>
            <input placeholder="Roja" id="nombre" name="nombre" type="text" value="{{ $pintura->nombre }}">
            <br> <br>
            <label for="desc">Descripción</label>
            <input placeholder="Pintura_roja" id="desc" name="desc" type="text" value="{{ $pintura->desc }}">
            <br> <br>
            <label for="precio">Precio</label>
            <input placeholder="55" id="precio" name="precio" type="number" value="{{ $pintura->precio }}">
            <br>
            <button type="submit">Guardar</button>
    
    </form>

</body>
</html>