<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>

    <h2>Formulario productos</h2>

    <form action="{{ route('pintura.store') }}" method="POST">
    @csrf

        <br> <br>
        <label for="nombre">Nombre</label>
        <input placeholder="Roja" id="nombre" name="nombre" type="text" value="{{ old('nombre') }}">
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br> <br>
        <label for="desc">Descripción</label>
        <input placeholder="Pintura_roja" id="desc" name="desc" type="text" value="{{ old('desc') }}">
        @error('desc')
            <i>{{ $message }}</i>
        @enderror
        <br> <br>
        <label for="precio">Precio</label>
        <input placeholder="55" id="precio" name="precio" type="number" value="{{ old('precio') }}">
        @error('precio')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <button typw="submit">Guardar</button>

    </form>
</body>
</html>