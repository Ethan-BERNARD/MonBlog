<?php
require 'Modele/Modele.php';

// Affiche tous les articles du blog
function accueil() {
    $billets = getBillets();
    $contenu = 'Vue/vueAccueil.php';
    require 'Vue/gabarit.php';
}

function unBillet($idBillet) {
    $billet = getUnBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    $contenu = 'Vue/vueBillet.php';
    require 'Vue/gabarit.php';
}

function erreur($msgErreur) {
    $contenu = 'Vue/vueErreur.php';
    require 'Vue/gabarit.php';
}