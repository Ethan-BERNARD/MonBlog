<?php
function getBillets() {
    try {
        $bdd = getBdD();
        $sql = 'SELECT idBillet, titreBillet, contenuBillet, DATE_FORMAT(dateBillet, "%d/%m/%Y à %Hh%imin") 
        AS dateBillet FROM billet ORDER BY idBillet DESC';
        $resultat = $bdd->query($sql);
        return $resultat->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getBdD() {
    $bdd = new PDO('mysql:host=perso.local;dbname=monblog;charset=utf8', 'root', '', 
                                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;

}

function getUnBillet($idBillet) {
    $bdd = getBdD();
    $sql = 'SELECT idBillet, titreBillet, contenuBillet, DATE_FORMAT(dateBillet, "%d/%m/%Y à %Hh%imin") AS dateBillet 
            FROM billet WHERE idBillet = ?';
    $requete = $bdd->prepare($sql);
    $requete->execute([$idBillet]);
    return $requete->fetch(PDO::FETCH_ASSOC);
}

function getCommentaires($idBillet) {
    $bdd = getBdD();
    $sql = 'SELECT auteurCommentaire AS auteur, contenuCommentaire AS contenu, 
                   DATE_FORMAT(dateCommentaire, "%d/%m/%Y à %Hh%imin") AS dateCommentaire 
            FROM commentaire 
            WHERE idBillet = ? 
            ORDER BY dateCommentaire DESC';
    $requete = $bdd->prepare($sql);
    $requete->execute([$idBillet]);
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}


