<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precios</title>
</head>
<body>
    <h1>{{$nombre_precio}}</h1>

    @foreach($precios as $plan => $precio)
        <p>
            <h2>
                {{ strtoupper($plan) }}: {{ number_format($precio, 2)}}
            </h2>
        </p>
        @if($loop->last)
            <hr>
        @endif

    @endforeach

        @if(!empty($cupon))
            <h2> {{ $cupon }}</h2>
        @endif
    
</body>
</html>