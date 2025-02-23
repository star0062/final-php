<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Superhéros</title>
    <link rel="stylesheet" href="{{ asset('css/tableSuperhero.css') }}">
</head>
<body>
    <h1>Liste des Superhéros</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Planet</th>
                <th>Déscription</th>
                <th>Superpouvoir</th>
                <th>Ville protégé</th>
                <th>Gadgets</th>
                <th>Équipe</th>
                <th>Véhicule</th>
                <th>Date de création</th>
                <th>Date de mise a jour</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $hero)
                <tr>
                    <td>{{ $hero->id }}</td>
                    <td>{{ $hero->name }}</td>
                    <td>{{ $hero->gender }}</td>
                    <td>{{ $hero->planet }}</td>
                    <td>{{ $hero->description }}</td>
                    <td>{{ $hero->superpower }}</td>
                    <td>{{ $hero->city_protection }}</td>
                    <td>{{ $hero->gadgets }}</td>
                    <td>{{ $hero->team }}</td>
                    <td>{{ $hero->vehicle }}</td>
                    <td>{{ $hero->created_at }}</td>
                    <td>{{ $hero->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <form action="{{ url('/table-sh')}}" method="POST">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" required>

        <label>Genre :</label>
        <select id="choix" name="gender" required>
            <option value="male">Homme</option>
            <option value="female">Femme</option>
        </select>

        <label>Planet :</label>
        <input type="text" name="planet" required>

        <label>Description :</label>
        <input type="text" name="description" required>

        <label>Superpouvoir :</label>
        <input type="text" name="superpower" required>

        <label>Ville protéger :</label>
        <input type="text" name="city_protection" required>

        <label>Gadgets :</label>
        <input type="text" name="gadgets" required>

        <label>Equipe :</label>
        <input type="text" name="team" required>

        <label>Vehicule :</label>
        <input type="text" name="vehicle" required>

        <button type="submit">Ajout du Superhero</button>
    </form>

</body>
</html>
