<h2><?=$message?></h2>
<p>Actuellement il y a <strong><?=$nbArticle?></strong> sur notre blog.</p>
<?php foreach ($articles as $article) : ?>
        <p>
                <a href="<?= $view->path('article',[$article->id]); ?>">
                        <?=$article->titre?>
                </a>
        </p>
<?php endforeach; ?>
