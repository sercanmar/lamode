<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pasteles</title>
</head>
<body>
    <h1>Listado de Pasteles</h1>
    <ul>
        @foreach($pasteles as $pastel)
            <li>
                <strong>Nombre:</strong> {{ $pastel->nombre }} <br>
                <strong>Sabor:</strong> {{ $pastel->sabor }} <br>
                <strong>Imagen:</strong> <img src="{{ $pastel->imagen }}" alt="Imagen del Pastel"> <br>
            </li>
        @endforeach
    </ul>
</body>
</html>