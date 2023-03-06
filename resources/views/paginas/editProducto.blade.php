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
        @method('PATCH')
        @csrf
            <br> <br>
            <label for="nombre">Nombre</label>
            <input placeholder="Roja" id="nombre" name="nombre" type="text" value="{{ old('nombre') ?? $pintura->nombre }}">
            @error('nombre')
                <i>{{ $message }}</i>
            @enderror
            <br> <br>
            <label for="desc">Descripción</label>
            <input placeholder="Pintura_roja" id="desc" name="desc" type="text" value="{{ old('desc') ?? $pintura->descripcion }}">
            @error('desc')
                <i>{{ $message }}</i>
            @enderror
            <br> <br>
            <label for="precio">Precio</label>
            <input placeholder="55" id="precio" name="precio" type="number" value="{{ old('precio') ?? $pintura->precio }}">
            @error('precio')
                <i>{{ $message }}</i>
            @enderror
            <br>
            <button type="submit">Guardar</button>
    
    </form>

</body>
</html>