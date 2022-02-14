<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/templates/templates.css">
    <link rel="stylesheet" href="../assets/styles/home.css">
    <link rel="stylesheet" href="../assets/styles/cases.css">
    <link rel="stylesheet" href="../assets/styles/googleicons.css">
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
    <?php include './templates/cases.html' ?>
</body>
<script src="../js/home.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/cases.js"></script>

</html>