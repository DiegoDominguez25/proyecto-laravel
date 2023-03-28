<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario contacto</h1>

    <form action="/recibe-form-contacto" method="POST">
    @csrf
        <label for="nombre">Nombre:</label> <br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="correo">Correo:</label> <br>
        <input type="text" name="correo" id="correo" value="{{ old('correo') }}">
        <br>
        @error('correo')
            <i>{{ $message }}</i>
        @enderror

        <label for="mensaje">Mensaje:</label> <br>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10" value="{{ old('mensaje') }}"></textarea>
        <br>
        @error('mensaje')
            <i>{{ $message }}</i>
        @enderror

        <input type="submit" value="Enviar">
    </form>
</body>
</html>