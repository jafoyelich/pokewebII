<!-- resources/views/pokedex/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="text-center mb-4">Pokédex</h1>
    <!-- Formulario de búsqueda -->
    <form action="{{ url('/pokedex') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar Pokémon..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </form>
    <!-- Lista de Pokémon -->
    <div class="row">
        @foreach ($pokemons as $pokemon)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-capitalize">{{ $pokemon->name }}</h5>
                        <a href="{{ url('/pokedex/' . $pokemon->name) }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
