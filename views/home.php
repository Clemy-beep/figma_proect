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
    <?php include './templates/discussion-modal.html'; ?>
    <div id="searchbar">
        <button id="categories" onclick="showMenu()"><span>Toutes les catégories</span></button>
        <input type="text" name="search" id="searchInput" placeholder="Pathologie">
        <button id="searchLogo"><span class="material-icons-outlined">search</span></button>
    </div>
    <?php include './templates/menu.html'; ?>
    <h1 class="home-title"><span class="material-icons-outlined">sms</span>Sujets de discussion</h1>
    <?php include './templates/carousel.html'; ?>
    <h1 class="home-title"><span class="material-icons-outlined">medical_information</span>Cas cliniques</h1>
    <select name="order" id="order-by">
        <option value="date_asc">Tri par le plus récent</option>
        <option value="date_desc">Tri par le plus ancien</option>
        <option value="alph_asc">Tri par ordre alphabétique</option>
    </select>
    <div id="cases-container">
        <div class="case">
            <div class="top-part">
                <img class="fav-icon" src="../assets/images/star-regular.svg" alt="fav-button">
                <div class="tags">
                    <div class="tag">Fumeur</div>
                    <div class="tag">Parodontite</div>
                    <div class="tag">Abcès</div>
                </div>
            </div>
            <div class="bottom-part">
                <span class="case-title">Abcès parodontal</span>
                <span class="case-description">Un jeune patient de 38ans s’est présenté en consultation au service d’Odontologie chirurgicale du Centre de Consultation et de Traitements Dentaires du CHU Ibn Rochd de Casablanca, pour une tuméfaction endobuccale de la région prémolaire mandibulaire droite... </span>
                <div class="author-comments">
                    <div class="case-author">
                        <img src="../assets/images/profil.jpg" alt="bg">
                        <span class="case-author-name"> <strong>Mounia</strong> <br> Chirurgien Dentiste</span>
                    </div>
                    <div id="comments-rate">
                        <span class="rate">3.6</span>
                        <span class="comments">6</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="case">
            <div class="top-part">
                <img class="fav-icon" src="../assets/images/star-regular.svg" alt="fav-button">
                <div class="tags">
                    <div class="tag">Greffe</div>
                    <div class="tag">Gencive</div>
                </div>
            </div>
            <div class="bottom-part">
                <span class="case-title">Greffe de gencive</span>
                <span class="case-description">L’améloblastome est une tumeur odontogène, d’agressivité locale, avec un taux de transformation maligne très faible. Elle est néanmoins connue très récidivante après traitement. Il s’agit de la tumeur bénigne odontogène la plus fréquente dans les pays...</span>
                <div class="author-comments">
                    <div class="case-author">
                        <img src="../assets/images/profil.jpg" alt="bg">
                        <span class="case-author-name"> <strong>Arthur</strong> <br> Etudiant </span>
                    </div>
                    <div id="comments-rate">
                        <span class="rate">4.8</span>
                        <span class="comments">17</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="case">
            <div class="top-part">
                <img class="fav-icon" src="../assets/images/star-regular.svg" alt="fav-button">
                <div class="tags">
                    <div class="tag">Mâchoire</div>
                    <div class="tag">Parodontite</div>
                    <div class="tag">Extraction</div>
                </div>
            </div>
            <div class="bottom-part">
                <span class="case-title">Parodontie aïgue</span>
                <span class="case-description">L’énucléation et l’exérèse de la lésion avaient été réalisées sous anesthésie locorégionale. En macroscopie, la pièce opération était ferme avec des contours irréguliers (Fig. 5). L’examen anathomopathologique de la lésio révélait la présence de tumeur...</span>
                <div class="author-comments">
                    <div class="case-author">
                        <img src="../assets/images/profil.jpg" alt="bg">
                        <span class="case-author-name"> <strong>Nikita</strong> <br> Implantologue</span>
                    </div>
                    <div id="comments-rate">
                        <span class="rate">4.6</span>
                        <span class="comments">13</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/home.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/menu.js"></script>

</html>