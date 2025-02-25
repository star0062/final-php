<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Superhéros</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit_hero.css') }}">
</head>
<body>

    <header>
        <h1>Modifier Superhéros</h1>
        <a class="back_list" href="{{ url('/table-sh') }}" >Retour à la liste des Superhéros</a><br>
    </header>

    <form class="form_edit" action="{{ url('/api/superheroes/' . $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nom :</label>
        <input type="text" name="name" value="{{ $superhero->name }}" required>

        <label>Genre :</label>
        <select id="choix" name="gender" required>
            <option value="male" {{ $superhero->gender == 'male' ? 'selected' : '' }}>Homme</option>
            <option value="female" {{ $superhero->gender == 'female' ? 'selected' : '' }}>Femme</option>
        </select>

        <label>Planet :</label>
        <input type="text" name="planet" value="{{ $superhero->planet }}" required>

        <label>Description :</label>
        <input type="text" name="description" value="{{ $superhero->description }}" required>

        <label>Superpouvoir :</label>
        <input type="text" name="superpower" value="{{ $superhero->superpower }}" required>

        <label>Ville protéger :</label>
        <input type="text" name="city_protection" value="{{ $superhero->city_protection }}" required>

        <label>Gadgets :</label>
        <input type="text" name="gadgets" value="{{ $superhero->gadgets }}" required>

        <label>Equipe :</label>
        <input type="text" name="team" value="{{ $superhero->team }}" required>

        <label>Vehicule :</label>
        <input type="text" name="vehicle" value="{{ $superhero->vehicle }}" required>

        <button class="btn_edit" type="submit">Modifier Superhéros</button>
    </form>

</body>
</html>
