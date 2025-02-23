<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <h2>Créer un compte</h2>
        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <label>Prénon :</label>
            <input type="text" name="name" required>

            <label>Nom :</label>
            <input type="text" name="lastname" required>

            <label>Email :</label>
            <input type="email" name="email" required>

            <label>Mot de passe :</label>
            <p>8 caractere minimum</p>
            <input type="password" name="password" required>

            <label>Confirmer le mot de passe :</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">S'inscrire</button>
        </form>
        <p>Déjà un compte ? <a href="{{ url('/login') }}">Se connecter</a></p>
    </div>
</body>
</html>
