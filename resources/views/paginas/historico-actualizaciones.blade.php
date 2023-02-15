<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizaciones</title>
</head>
<body>
    <h1>Historico</h1>
    <ul>
        @foreach($versiones as $ver)
            <li>{{$ver}}</li>
        @endforeach
    </ul>
        
    @if(!empty($version))
        <p>
            {{$version}}
        </p>
    @endif
    
</body>
</html>