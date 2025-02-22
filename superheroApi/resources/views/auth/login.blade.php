<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <label>Email :</label>
            <input type="email" name="email" required>

            <label>Mot de passe :</label>
            <input type="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>
        <p>Pas encore de compte ? <a href="{{ url('/register') }}">S'inscrire</a></p>
    </div>
</body>

</html>
