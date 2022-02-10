<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/templates/templates.css">
    <link rel="stylesheet" href="../assets/styles/home.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php include './templates/header.html'; ?>
    <div id="searchbar">
        <button id="categories">Toutes les categories</button>
        <input type="text" name="search" id="searchInput" placeholder="Pathologie">
        <button id="searchLogo"><span class="material-icons-outlined">search</span></button>
    </div>
    <div id="overlay-menu">
        <div id="menu-header">RECHERCHE PAR CATEGORIE</div>
        <ul id="menu-items">
            <li>Text</li>
            <li>Text</li>
        </ul>
    </div>
</body>

</html>