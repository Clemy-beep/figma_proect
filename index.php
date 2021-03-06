<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/main.css">
    <link rel="stylesheet" href="assets/styles/googleicons.css">
    <title>Inscription</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <img src="./assets/images/logoBlancComplet.png" alt="dentilo logo">
    <form action="#" id="registerForm">
        <h1>Inscription</h1>
        <div id="pseudo">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Placeholder text...">
        </div>
        <div id="email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Placeholder text...">
        </div>
        <div id="profession">
            <label for="profession">Vous êtes...</label>
            <select name="profession" id="profession">
                <option value="Chirurgien Dentiste" default>Chirurgien Dentiste</option>
                <option value="Etudiant">Etudiant</option>
                <option value="Implantologue">Implantologue</option>
            </select>
        </div>
        <div id="password">
            <label for="Password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Placeholder text...">
            <p id="rules">8 caractères minimum, un caractère spécial, une majuscule</p>
        </div>
        <button id="registerbutton" onclick="showLogin()">S'inscrire</button>
        <p>Déjà un compte ? <span id="link" onclick="showLogin()">Connectez-vous</span></p>

    </form>
    <form action="" id="loginForm" style="display: none">
        <h1>Connexion</h1>
        <div id="email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Placeholder text...">
        </div>
        <div id="password">
            <label for="Password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Placeholder text...">
        </div>
        <button id="loginButton">Se connecter</button>
        <p>Pas encore de compte ? <span id="link2" onclick="showRegister()">Inscrivez-vous</span></p>
    </form>

</body>
<script src="index.js"></script>

</html>