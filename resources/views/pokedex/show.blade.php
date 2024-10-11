<!-- resources/views/pokedex/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de {{ $pokemon->name }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="text-center mb-4 text-capitalize">{{ $pokemon->name }}</h1>
    <div class="text-center">
        <img src="{{ $pokemon->sprites->front_default }}" alt="{{ $pokemon->name }}" class="mb-3">
    </div>
    <h3>Habilidades</h3>
    <ul class="list-group mb-4">
        @foreach ($pokemon->abilities as $ability)
            <li class="list-group-item text-capitalize">{{ $ability->ability->name }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/pokedex') }}" class="btn btn-secondary">Volver a la Pokédex</a>
</div>
</body>
</html>
