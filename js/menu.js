function showMenu() {
    // e.preventDefault();
    $('#menu').css('width', '30vw');
    $('#overlay-menu').css('visibility', "visible");

}

function closeMenu() {
    //e.preventDefault();
    $("#menu").animate({ width: 0 }, 350, function() {
        $('#overlay-menu').css('visibility', "hidden");
    });
}

function changeText() {
    //e.preventDefault();
    $('#menu').fadeOut(function() {
        $(`
            <div id="menu">
                <div id="menu-header"> <span id="headertext">Pathologies</span><span class="material-icons-outlined" id="closebis" onclick="closeUnderMenu()">chevron_left</span></div>
                <p class="menu-title">Traumatologie faciale</p>
                <p class="menu-content">Plaie de la face</p>
                <p class="menu-content">Brûlûre de la face</p>
                <p class="menu-content">Fracture de la face</p>
                <p class="menu-content">Fracture de la mandibule</p>
                <p class="menu-content">Traumatisme dentaire</p>
                <p class="menu-content">Traumatisme parondontal</p>
                <p class="menu-content">Fracture de l'os alvéolaire</p>
                <p class="menu-content">Traumatisme des dents temporaires</p>
                <p class="menu-title">Pathologie dentaire</p>
                <p class="menu-content">Anomalie de nombre, taille et forme</p>
                <p class="menu-content">Anomalie d'éruption</p>
                <p class="menu-content">Anomalie de structure</p>
                <p class="menu-content">Anomalie de couleur</p>
                <p class="menu-content">Caries dentaires</p>
                <p class="menu-content">Pathologie infectieuse</p>
                <p class="menu-content">Infection focale</p>
                <p class="menu-title">Parodontopathies</p>
            </div>
            `).replaceAll("#menu");
    });
}

function closeUnderMenu() {
    e.preventDefault();
    $('#menu').fadeOut(function() {
        $(`  
            <div id="menu">
                <div id="menu-header"> <span id="headertext">RECHERCHE PAR CATEGORIE</span><span class="material-icons-outlined" id="close" onclick="closeMenu()">chevron_left</span></div>
                <ul id="menu-items">
                    <li id="pathology" onclick="changeText()">Pathologie<span id="pathology" class="material-icons-outlined">chevron_right</span></li>
                    <li>Traitement<span class="material-icons-outlined">chevron_right</span></li>
                    <li>Spécialité<span class="material-icons-outlined">chevron_right</span></li>
                    <li>Anatomie<span class="material-icons-outlined">chevron_right</span></li>
                </ul>
            </div>
            `).replaceAll('#menu');
    });
}