<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Superhéros</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tableSuperhero.css') }}">
</head>
<body>
    <header>
        <h1>Liste des Superhéros</h1>
        <a class="dashbord" href="{{ url('/dashboard') }}">Aller au menu</a><br>
        <a class="creat" href="{{ url('/api/superheroes/create') }}" class="">Ajout du Superhero</a>
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button type="submit" class="disconnect">Déconnexion</button>
        </form>

    </header>



    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="form_search" action="{{ url('/table-sh') }}" method="GET">
        <input type="text" name="query" placeholder="Rechercher..." value="{{ request('query') }}">
        <button class="btn_search" type="submit">Rechercher</button>
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
