<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout du Superhero</title>
    <link rel="stylesheet" href="{{ asset('css/createSuperhero.css') }}">
</head>
<body>
    <header>
        <a href="{{ url('/table-sh') }}" class="btn btn-secondary">Retour à la liste des Superhéros</a>
    </header>

    <h1>Ajout du Superhero</h1>

    <form action="{{ url('/api/superheroes')}}" method="POST">
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