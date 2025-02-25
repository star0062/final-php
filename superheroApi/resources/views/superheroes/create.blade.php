<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout du Superhero</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/creat_hero.css') }}">

</head>
<body>



    <header>
        <h1>Liste des Superhéros</h1>
        <a class="dashbord" href="{{ url('/dashboard') }}">Aller au menu</a><br>
        <a class="back_list" href="{{ url('/table-sh') }}" >Retour à la liste des Superhéros</a>
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button class="disconnect" type="submit">Déconnexion</button>
        </form>

    </header>







    <form class="form_creat_hero" action="{{ url('/api/superheroes')}}" method="POST">
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

        <button class="btn_creat" type="submit">Ajout du Superhero</button>
    </form>
</body>
</html>
