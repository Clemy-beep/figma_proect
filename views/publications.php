<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/styles/publications.css">
    <link rel="stylesheet" href="../assets/styles/googleicons.css">
    <link rel="stylesheet" href="../assets/styles/cases.css">
    <link rel="stylesheet" href="../assets/styles/templates/templates.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Publications</title>
</head>

<body>
    <?php include './templates/header.html' ?>
    <div id="user">
        <img src="../assets/images/profil.jpg" alt="bg">
        <div id="user-infos">
            <div id="user-name">
                <span>John Doe</span>
                <button id="edit">Modifier vos informations</button>
                <button id="logout">Déconnexion</button>
            </div>
            <span id="user-profession">Médecin</span>
            <div id="user-stats">
                <span id="user-pub-num">15 cas publiés</span>
                <span id="user-followers">56 abonnés</span>
            </div>
        </div>
    </div>
    <?php include './templates/cases.html' ?>
</body>

</html>