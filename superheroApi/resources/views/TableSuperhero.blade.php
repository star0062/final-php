<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Superhéros</title>
    <link rel="stylesheet" href="{{ asset('css/tableSuperhero.css') }}">
</head>
<body>
    <header>
        <a href="{{ url('/api/superheroes/create') }}" class="btn btn-primary">Ajout du Superhero</a>
        <form action="{{ url('/logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Déconnexion</button>
        </form>
    </header>

    <h1>Liste des Superhéros</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/table-sh') }}" method="GET">
        <input type="text" name="query" placeholder="Rechercher..." value="{{ request('query') }}">
        <button type="submit">Rechercher</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $hero)
                <tr>
                    <td><a href="{{ url('/api/superheroes/' . $hero->id) }}">{{ $hero->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


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
                            $('#superhero-list').append('<tr><td><a href="/api/superheroes/' + hero.id + '">' + hero.name + '</a></td></tr>');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>