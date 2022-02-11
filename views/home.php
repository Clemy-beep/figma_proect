<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/templates/templates.css">
    <link rel="stylesheet" href="../assets/styles/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php include './templates/header.html'; ?>
    <div id="searchbar">
        <button id="categories" onclick="showMenu()"><span>Toutes les catégories</span></button>
        <input type="text" name="search" id="searchInput" placeholder="Pathologie">
        <button id="searchLogo"><span class="material-icons-outlined">search</span></button>
    </div>
    <div id="overlay-menu">
        <div id="menu">
            <div id="menu-header"> <span id="headertext">RECHERCHE PAR CATEGORIE</span><span class="material-icons-outlined" id="close" onclick="closeMenu()">chevron_left</span></div>
            <ul id="menu-items">
                <li id="pathology" onclick="changeText()">Pathologie<span id="pathology" class="material-icons-outlined">chevron_right</span></li>
                <li>Traitement<span class="material-icons-outlined">chevron_right</span></li>
                <li>Spécialité<span class="material-icons-outlined">chevron_right</span></li>
                <li>Anatomie<span class="material-icons-outlined">chevron_right</span></li>
            </ul>
        </div>
    </div>
    <h1 class="home-title"><span class="material-icons-outlined">sms</span>Sujets de discussion</h1>
    <div id="carousel">
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
        <div class="photo-chat">
            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
            <div class="photo-container">Photo</div>
            <div class="photo-messages">13</div>
        </div>
    </div>
</body>
<script src="../js/home.js"></script>

</html>