<?php
    require 'Controleur.php';

    try {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'billet') {
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $idBillet = intval($_GET['id']);
                    unBillet($idBillet);
                }
            } else {
                erreur("Action non valide");
            }
        } else {
            accueil();
        }
    } catch (Exception $e) {
        erreur($e->getMessage());
    }
