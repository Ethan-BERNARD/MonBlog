<h1><?= htmlspecialchars($billet['titreBillet']) ?></h1>
<p><em>Publié le <?= htmlspecialchars($billet['dateBillet']) ?></em></p>
<p><?= nl2br(htmlspecialchars($billet['contenuBillet'])) ?></p>

<h2>Les commentaires</h2>
<?php foreach ($commentaires as $commentaire): ?>
    <p><strong><?= htmlspecialchars($commentaire['auteur']) ?></strong> a dit :</p>
    <p><?= nl2br(htmlspecialchars($commentaire['contenu'])) ?></p>
    <p><em>Le <?= htmlspecialchars($commentaire['dateCommentaire']) ?></em></p>
<?php endforeach; ?>
