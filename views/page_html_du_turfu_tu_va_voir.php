<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajout cas clinique</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/styles/googleicons.css" />
    <link rel="stylesheet" href="/assets/styles/fichier.css" />
    <link rel="stylesheet" href="../assets/styles/templates/templates.css">
</head>

<body>
    <?php include './templates/header.html' ?>
    <form action="#" id="body"> 
        <div class="info">
            <h1>Informations du patient</h1>
            <div class="info-form">
                <div class="patient">
                    <div class="form-1">
                        <label for="naissance">Année de naissance</label>
                        <select name="naissance">
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                        </select>

                        <label for="fumeur">Fumeur</label>
                        <select name="fumeur">
                            <option value="occasionnel">Occasionnel</option>
                            <option value="un_vrai_pompier">Un vrai pompier</option>
                            <option value="zero_c'est_le_boss">0 c'est le boss</option>
                        </select>
                    </div>
                    <div class="form-2">
                        <label for="sexe">Sexe</label>
                        <select name="sexe">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>

                        <label for="alcool">Alcool</label>
                        <select name="alcool">
                            <option value="jamais">Jamais</option>
                            <option value="picollo">Picollo</option>
                            <option value="occasionnel">Occasionnel</option>
                        </select>
                    </div>
                </div>
                <div class="f-antecedent">

                    <div class="Antecedent">
                        <div class="paragraphe">

                            <p>Antécédents médicaux</p>
                            <div id="icons-delete">
                                <p>Fibromialgie il y a 5 ans</p>
                                <span id="rotate" class="material-icons-outlined">
                                    add
                                </span>
                            </div>
                        </div>
                        <div class="rassemblement">
                            <div class="div">
                                <input type="text" name="" placeholder="Placeholder text..">
                                <span id="icon-add" class="material-icons-outlined">
                                    add_circle
                                </span>
                            </div>
                            <label for="traitement">Traitement en cours</label>
                            <div class="div">
                                <input type="text" name="traitement" placeholder="Placeholder text...">
                                <span id="icon-add" class="material-icons-outlined">
                                    add_circle
                                </span>
                            </div>
                            <label for="allergies">Allergies</label>
                            <div class="div">
                                <input type="text" name="allergies" placeholder="Placeholder text...">
                                <span id="icon-add" class="material-icons-outlined">
                                    add_circle
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="motif">
                    <label for="motif">Motif de la consultation</label>
                    <input type="text" name="motif" placeholder="Placeholder text...">
                </div>
            </div>
        </div>

        <div class="examen">
            <h1>examen clinique</h1>
            <div class="form-exam">
                <p class="texte">Ajoutez des photos</p>
                <div class="photo">
                    <div class="icons-add-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            add_a_photo
                        </span>
                        <p class="photo-txt">Ajouter des photos</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt-long">Image de couverture</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt">Photo n°1</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt">Photo n°2</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt">Photo n°3</p>
                    </div>
                </div>
                <div class="description">
                    <label for="description">Description intraorale et extraorale</label>
                    <textarea name="description" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>
                <h3>Examen complémentaires</h3>
                <div class="checkbox">
                    <input type="checkbox" class="input-checkbox" name="scanner">
                    <label for="scanner">Scanner</label>
                </div>
                <p class="text-ajouter">Ajoutez des photos (3 max)</p>
                <div class="photo-exam">
                    <div class="icons-add-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            add_a_photo
                        </span>
                        <p class="photo-txt">Ajouter des photos</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt">Photo n°1</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt">Photo n°2</p>
                    </div>
                    <div class="icons-photo">
                        <span id="add-photo" class="material-icons-outlined">
                            photo_camera
                        </span>
                        <p class="photo-txt">Photo n°3</p>
                    </div>
                    <div class="description-photo">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="checkbox-3">

                    <div class="checkbox">
                        <input type="checkbox" class="input-checkbox" name="scanner">
                        <label for="scanner">Scanner</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" class="input-checkbox" name="scanner">
                        <label for="scanner">Scanner</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" class="input-checkbox" name="scanner">
                        <label for="scanner">Scanner</label>
                    </div>
                </div>
                <div class="add-examen">
                    <span id="icon-add" class="material-icons-outlined">
                        add_circle
                    </span>
                    <p>Ajouter un examen</p>
                </div>
                <div class="description-other">
                    <label for="description">Description</label>
                    <textarea name="description" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>

            </div>
        </div>

        <div class="diagnostic">
            <h1>Diagnostic</h1>
            <div class="form-diagnostic">
                <div class="description-diagnostic">
                    <label for="description-diagnostic">Description</label>
                    <textarea name="description-diagnostic" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>
                <div class="pathologies">
                    <label for="pathologies">Ajouter une ou plusieurs pathologies</label>
                    <div class="ajout-search">
                        <input type="text" name="pathologies" placeholder="search">
                        <span id="icon-add" class="material-icons-outlined">
                            add_circle
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="categorie">
            <h1>Catégorie de la pathologie</h1>
            <div class="form-categorie">
                <div class="description-categorie">
                    <label for="description-categorie">Description</label>
                    <textarea name="description-categorie" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>
                <div class="medicaments">
                    <label for="medicament">Médicaments adminiostrés et posologies</label>
                    <div class="ajout-search">
                        <input type="text" name="medicament" placeholder="Placeholder text...">
                        <span id="icon-add" class="material-icons-outlined">
                            add_circle
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="traitement">
            <h1>Plan de traitement</h1>
            <div class="form-traitement">
                <p>Décrire étape par étape le plan de traitement effectué</p>

                <h5>Étape 1</h5>
                <div class="etape1">
                    <div class="description-traitement">
                        <label for="description-etape1">Description</label>
                        <textarea name="description-etape1" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                    </div>
                    <div class="photo-etape1">
                        <p>Lier une photo</p>
                        <div id="photo-traitement" class="icons-add-photo">
                            <span id="add-photo" class="material-icons-outlined">
                                add_a_photo
                            </span>
                            <p class="photo-txt">Ajouter des photos</p>
                        </div>
                    </div>
                </div>
                <h5>Étape 2</h5>
                <div class="etape2">
                    <div class="description-traitement">
                        <label for="description-etape2">Description</label>
                        <textarea name="description-etape2" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                    </div>
                    <div class="photo-etape2">
                        <p>Lier une photo</p>
                        <div id="photo-traitement" class="icons-add-photo">
                            <span id="add-photo" class="material-icons-outlined">
                                add_a_photo
                            </span>
                            <p class="photo-txt">Ajouter des photos</p>
                        </div>
                    </div>
                </div>
                <h5>Étape 3</h5>
                <div class="etape3">
                    <div class="description-traitement">
                        <label for="description-etape3">Description</label>
                        <textarea name="description-etape3" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                    </div>
                    <div class="photo-etape3">
                        <p>Lier une photo</p>
                        <div id="photo-traitement" class="icons-add-photo">
                            <span id="add-photo" class="material-icons-outlined">
                                add_a_photo
                            </span>
                            <p class="photo-txt">Ajouter des photos</p>
                        </div>
                    </div>
                </div>
                <div class="ajout-traitement">
                    <span id="icon-add" class="material-icons-outlined">
                        add_circle
                    </span>
                    <h6>Ajouter une étape</h6>
                </div>
            </div>
        </div>
        <div class="evolution">
            <h1>Evolution</h1>
            <div class="form-evolution">
                <div class="description-evolution">
                    <label for="description-evolution">Description</label>
                    <textarea name="description-evolution" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>
                <div class="add-photo-evolution">
                    <label for="add-photo-evolution">Ajoutez des photos</label>
                    <div class="flex-photo">

                        <div id="photo-evolution" class="icons-add-photo">
                            <span id="add-photo" class="material-icons-outlined">
                                add_a_photo
                            </span>
                            <p class="photo-txt">Ajouter des photos</p>
                        </div>
                        <div id="photo-evolution" class="icons-add-photo">
                            <span id="add-photo" class="material-icons-outlined">
                                add_a_photo
                            </span>
                            <p class="photo-txt">Ajouter des photos</p>
                        </div>
                        <div id="photo-evolution" class="icons-add-photo">
                            <span id="add-photo" class="material-icons-outlined">
                                add_a_photo
                            </span>
                            <p class="photo-txt">Ajouter des photos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="conclusion">
            <h1>Conclusion</h1>
            <div class="form-conclusion">
                <div class="description-conclusion">
                    <label for="description-conclusion">Description</label>
                    <textarea name="description-conclusion" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="ajout">
            <h1>Ajouter votre cas clinique</h1>
            <div class="form-ajout">
                <div class="title">
                    <label for="title">Titre du cas</label>
                    <input type="text" name="title" placeholder="Placeholder text...">
                </div>
                <div class="resume">
                    <label for="resume">Résumé</label>
                    <textarea name="resume" placeholder="Placeholder text..." cols="30" rows="10"></textarea>
                </div>
                <div class="mots-cles">
                    <label for="mots-cles">Mots clés</label>
                    <div class="ajout-mots-cles">
                        <input type="text" name="mots-cles" placeholder="Placeholder text..">
                        <span id="icon-add" class="material-icons-outlined">
                            add_circle
                        </span>
                    </div>
                </div>
                <div class="specialites">
                    <label for="specialites">Spécialités</label>
                    <div class="ajout-specialites">
                        <select name="specialites">
                            <option value="">Select...</option>
                        </select>
                        <span id="icon-add" class="material-icons-outlined">
                            add_circle
                        </span>
                    </div>
                </div>
                <input type="submit" id="myBtn" class="submit" value="AJOUTER LE CAS CLINIQUE">
            </div>
        </div>

    </form>


    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close">x</span>
            <form action="#" class="form-modal">

                <h2 class="title-modal">Lignes directrices pour la publication</h2>
                <p class="p-modal">.Supprimez tous informations d'identification du patient. Cela comprendra les noms, les dates, les lieux, les visages, les tatouages ou tout autre détail qui pourrait être utilisé pour identifier un patient.
                </p>
                <p class="p-modal">.Respectez les patients</p>
                <p class="p-modal">.Partagez uniquement les cas professionnels.</p>
                <p class="p-modal">.Dentiio n'est pas une destinée à partager vos propores conditions médicales, ni celles de votre famille ou de vos amis</p>
                <p class="p-modal">.Tous les cas sont examinés avant d'être ajoutés à notre base de données.</p>
                <p class="p-modal">Les cas qui ne répondent pas à ces critères ne seront pas acceptés.</p>
                <p class="p-modal">Veuillez noter que toutes vos activités sur la Dentiio sont soumises à nos directives communautaires complètes et à nos condition d'uitlisation.</p>
                <input type="submit" class="submit-modal" value="J'ai compris">
            </form>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>