<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact 1</h1>
    <p>{{ $name }}</p>

    @if ($name != 'Juan')
        <p>Tu nombre no es Juan</p>
    @else
        <p>Hola Juan!</p>
    @endif

    <ul>
        @foreach ([1,2,3,4,5] as $item)
            <li>Item {{ $item }}</li>
        @endforeach
    </ul>
    
</body>
</html>