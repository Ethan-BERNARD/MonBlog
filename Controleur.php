<?php
require 'Modele.php';

// Affiche tous les articles du blog
function accueil() {
    $billets = getBillets();
    $contenu = 'vueAccueil.php';
    require 'gabarit.php';
}

function unBillet($idBillet) {
    $billet = getUnBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    $contenu = 'vueBillet.php';
    require 'gabarit.php';
}

function erreur($msgErreur) {
    $contenu = 'vueErreur.php';
    require 'gabarit.php';
}