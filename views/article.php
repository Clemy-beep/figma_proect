<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/templates/templates.css">
    <link rel="stylesheet" href="../assets/styles/article.css">
    <link rel="stylesheet" href="../assets/styles/googleicons.css">
    <link rel="stylesheet" href="../assets/styles/comment.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Article</title>
</head>

<body>
    <?php include './templates/header.html'; ?>
    <div id="header-bis">
        <nav style="margin: 0">
            <ul id="nav-bar-bis" style="font-weight: bold !important;">
                <li>
                    <span id="back" style="color: #03B6F0;" class="material-icons-outlined">arrow_back</span>
                </li>
                <li>Examen</li>
                <li>Diagnostic</li>
                <li>Prise en charge</li>
                <li>Résultats</li>
                <li>Discussion</li>
                <li>Conclusion</li>
            </ul>
        </nav>
    </div>
    <h1 id="article-title">Traitement de racine de dents traumatisées</h1>
    <div id="article-miscs">
        <div id="article-categories">
            <span class="article-category">Implantologie</span>,
            <span class="article-category">Omnipratique</span>
            <span id="article-date">Publiée il y a deux jours</span>
        </div>
        <div id="article-rates">
            <span class="article-rate">3.8</span>
            <span id="article-rate-num">31 notes</span>
        </div>
    </div>
    <div id="article-author-abstract">
        <div id="article-author">
            <img src="../assets/images/profil.jpg" alt="bg">
            <div id="article-author-name-profession">
                <span id="article-author-name">Arthur</span>
                <span id="article-author-profession">Etudiant</span>
            </div>
        </div>
        <div id="article-abstract">
            <span id="article-resume">L’améloblastome est la tumeur odontogène la plus fréquente dans les pays en voie de développement et occupe la 2ème place après lves odontomes dans les pays développés. Elle a été classée cliniquement en 3 groupes par l’OMS en 2017. La prise en charge de l’améloblastome est compliquée par le taux de récidive important associé à un traitement conservateur.</span>
            <div id="article-tags">
                <span class="tag">Fumeur</span>
                <span class="tag">Parodontie</span>
                <span class="tag">Abcès</span>
            </div>
        </div>
    </div>
    <div id="patient-infos">
        <span id="patient-infos-title">Fiche du patient</span>
        <span id="patient-age">Age : 33</span>
        <span id="patient-alcool"> Alcool : non</span>
        <ul id="patient-allergies">Allergies :
            <li class="allergy">Pollen</li>
            <li class="allergy">Codéine</li>
        </ul> 
        <span id="patient-gender">Sexe : Homme</span>
        <ul id="patient-treatments">Traitements en cours : aucun</ul>
    </div>
    <?php include 'Commentaires.php'; ?>
</body>

</html>