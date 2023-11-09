<h3><?=$article['titre']?></h3>

<p><?=$article['contenu']?></p>

<p>
    <a href="<?= $view->path('delete',[$article['id']]); ?>"
    onclick="return confirm('Etes vous certain de vouloir supprimer cet article !?')">
        Supprimer cet article
    </a>
</p>
<p>
<a href="<?= $view->path('edit',[$article['id']]); ?>">
Modifier cet article
</a>
</p>