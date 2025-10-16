<?php
require 'Controleur/Controleur.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] === 'billet') {
            if (isset($_GET['id'])) {
                if (is_numeric($_GET['id'])) {
                    $idBillet = intval($_GET['id']);
                    unBillet($idBillet);
                } else {
                    erreur("Identifiant de billet non valide");
                }
            } else {
                erreur("Identifiant de billet non défini");
            }
        } else {
            erreur("Action non valide");
        }
    } else {
        accueil();
    }
} catch (Exception $e) {
    erreur("Une erreur est survenue : " . $e->getMessage());
}
