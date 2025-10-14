<?php
require 'Modele.php';

try {
    $idBillet = $_GET['id'];
    $billet = getUnBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    $contenu = 'vueBillet.php';
    require 'gabarit.php';
} catch (Exception $e) {
    $msgErreur = "Erreur technique : " . $e->getMessage();
    $contenu = 'vueErreur.php';
    require 'gabarit.php';
}
