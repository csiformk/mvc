<h2><?=$message?></h2>
<p>Actuellement il y a <strong><?=$nbArticle?></strong> sur notre blog.</p>
<?php foreach ($articles as $article) : ?>
        <p><?=$article->titre?></p>
<?php endforeach; ?>
