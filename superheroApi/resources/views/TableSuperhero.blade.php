<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Superhéros</title>
    <link rel="stylesheet" href="{{ asset('css/tableSuperhero.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <div class="logout-container">
            <form action="{{ url('/logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Déconnexion</button>
            </form>
        </div>
    </header>

    <h1>Liste des Superhéros</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/table-sh') }}" method="GET" style="text-align: center;">
        <input type="text" name="query" placeholder="Rechercher..." value="{{ request('query') }}">
        <button type="submit">Rechercher</button>
    </form>

    <div class="actions">
        <a href="{{ url('/api/superheroes/create') }}" class="btn btn-primary">Ajout du Superhero</a>
    </div>

    <div class="superhero-grid" id="superhero-list">
        @foreach ($superheroes as $hero)
            <div class="superhero-card">
                <a href="{{ url('/api/superheroes/' . $hero->id) }}">{{ $hero->name }}</a>
            </div>
        @endforeach
    </div>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ url('/table-sh') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function(data) {
                        $('#superhero-list').html('');
                        $.each(data, function(key, hero) {
                            $('#superhero-list').append('<div class="superhero-card"><a href="/api/superheroes/' + hero.id + '">' + hero.name + '</a></div>');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>