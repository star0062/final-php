<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Superhéros</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show_hero.css') }}">
</head>
<body>
    <header>
        <h1>Détails du Superhéros</h1>
        <a class="back_list" href="{{ url('/table-sh') }}" >Retour à la liste des Superhéros</a><br>
        <a class="edit" href="{{ url('/api/superheroes/' . $superhero->id . '/edit') }}">Modifier le Superhero</a>
        <form action="{{ url('/api/superheroes/' . $superhero->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete" type="submit">Delete</button>
        </form>
    </header>
    <br>


    <table border="1">
        {{-- <tr>
            <th>ID</th>
            <td>{{ $superhero->id }}</td>
        </tr> --}}
        <tr>
            <th>Nom</th>
            <td>{{ $superhero->name }}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{ $superhero->gender }}</td>
        </tr>
        <tr>
            <th>Planet</th>
            <td>{{ $superhero->planet }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $superhero->description }}</td>
        </tr>
        <tr>
            <th>Superpouvoir</th>
            <td>{{ $superhero->superpower }}</td>
        </tr>
        <tr>
            <th>Ville protégé</th>
            <td>{{ $superhero->city_protection }}</td>
        </tr>
        <tr>
            <th>Gadgets</th>
            <td>{{ $superhero->gadgets }}</td>
        </tr>
        <tr>
            <th>Équipe</th>
            <td>{{ $superhero->team }}</td>
        </tr>
        <tr>
            <th>Véhicule</th>
            <td>{{ $superhero->vehicle }}</td>
        </tr>
        <tr>
            <th>Date de création</th>
            <td>{{ $superhero->created_at }}</td>
        </tr>
        <tr>
            <th>Date de mise à jour</th>
            <td>{{ $superhero->updated_at }}</td>
        </tr>
    </table>


</body>
</html>
