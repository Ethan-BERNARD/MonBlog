<?php foreach ($billets as $billet):?>
    <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titreBillet'] ?></h1>
            <time><?= $billet['dateBillet'] ?></time>
        </header>
        <p><?= $billet['contenuBillet'] ?></p>
        <em><a href="index.php?action=billet&id=<?= $billet['idBillet'] ?>">Commentaires</a></em>
    </article>
    <hr />
<?php endforeach; ?>
