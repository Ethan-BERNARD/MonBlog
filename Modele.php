<?php
function getBillets() {
    try {
        $bdd = new PDO('mysql:host=perso.local;dbname=monblog;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT idBillet, titreBillet, contenuBillet, DATE_FORMAT(dateBillet, "%d/%m/%Y à %Hh%imin") AS dateBillet FROM billet ORDER BY idBillet DESC';
        $resultat = $bdd->query($sql);

        return $resultat->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
