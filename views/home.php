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
        <div class="carousel-button" id="prev-button">
            <span class="material-icons-outlined">chevron_left</span>
        </div>
        <div id="carousel-items">
            <div class="photo-chat" id="discussion-display">
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
            <div class="photo-chat">
                <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                <div class="photo-container">Photo</div>
                <div class="photo-messages">13</div>
            </div>
            <div class="photo-chat">
                <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                <div class="photo-container">Photo</div>
                <div class="photo-messages">45</div>
            </div>
            <div class="photo-chat">
                <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                <div class="photo-container">Photo</div>
                <div class="photo-messages">10</div>
            </div>
            <div class="photo-chat">
                <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                <div class="photo-container">Photo</div>
                <div class="photo-messages">8</div>
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
        
        <div class="carousel-button" id="next-button">
            <span class="material-icons-outlined">chevron_right</span>
        </div>
    </div>
    <div id="modal-overlay">
        <div id="discussion-modal">
            <div id="discussion-messages">
                <div id="messages-list">
                    <div class="message">
                        <div class="author">
                            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                            <span class="name">Nikita </span><span class="time">9:05 Aujourd'hui</span>
                        </div>
                        <p class="message-text">Bonjour Romain. Je pense que vu l'avancée de l'infection, il faut extraire l'implant.</p>
                    </div>
                    <div class="message post-author">
                        <div class="author">
                            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                            <span class="name">Romain </span><span class="time">9:08 Aujourd'hui</span>
                        </div>
                        <p class="message-text">Bonjour Nikita, je m'en doutais mais je voulais confirmation. Merci.</p>
                    </div> 
                    <div class="message">
                        <div class="author">
                            <img class="profile " src="/assets/images/profil.jpg" alt="bg">
                            <span class="name">Nikita </span><span class="time">9:010 Aujourd'hui</span>
                        </div>
                        <p class="message-text">Derien</p>
                    </div> <div class="message">
                        <div class="author">
                            <img class="profile" src="/assets/images/profil.jpg" alt="bg">
                            <span class="name">Arthur </span><span class="time">9:05 Aujourd'hui</span>
                        </div>
                        <p class="message-text">Oui, séparation des deux couronnes, enlever l'implant en 37 et curetage pour bien nettoyer toute l'infection.</p>
                    </div>
                </div>
                <div id="message-write">
                    <textarea name="message" cols="30" rows="10">Laisser un commentaire...</textarea>
                    <div id="send">
                        <span class="material-icons-outlined">attach_file</span>
                        <button>Envoyer <span class="material-icons-outlined">send</span> </button>
                    </div>
                </div>
            </div>
            <div id="disccussion-info">
                <div id="radio">
                    <span id="close-btn" class="material-icons-outlined">close</span>
                </div>
                <div id="infos">
                    <div id="post-author">
                        <div id="radio-bis"></div>
                        <div id="author-infos">
                            <img class="profile " src="/assets/images/profil.jpg" alt="bg">
                            <span> <strong>Romain</strong> <br> Chirurgien Dentiste </span>
                        </div>
                    </div>
                    <div id="history">
                        <div class="title">
                            <div class="divider"></div>
                            <span>HISTORIQUE DU PATIENT</span>
                            <div class="divider"></div>
                        </div>
                        <div id="history-content">
                            <div id="sex-age">
                                <img class="icon" src="../assets/images/user-large-solid.svg" alt=""><br>
                                <span id="sex">Homme</span>
                                <span id="age">57ans</span>
                            </div>
                            <div id="drugs">
                                <img class="icon" src="../assets/images/drugs.svg" alt=""><br>
                                <span id="cigs">Non fumeur</span>
                                <span id="alcohol">Alcool occasionnel</span>
                            </div>
                            <div id="medics">
                                <img id="medic" src="../assets/images/pills-solid.svg" alt=""><br>
                                <span id="allergy">Aucune allergie</span>
                                <span id="medic-hist">Aucun antécédent</span>
                            </div>
                            <div id="motive">
                                <img id="form" src="../assets/images/file-medical-solid.svg" alt=""><br>
                                <span id="consult-motive">Contrôle de routine</span>
                            </div>
                        </div>
                    </div>
                    <div id="question">
                        <div class="title">
                            <div class="divider"></div>
                            <span>QUESTION</span>
                            <div class="divider"></div>
                        </div>
                        <div id="question-text">Le patient présente une péri-implantite en 37 mais pas de douleurs ni d'infections visibles en bouche. Quel traitement réaliser ?</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/home.js"></script>

</html>
