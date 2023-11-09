<h2><?=$message?></h2>
<p>Actuellement il y a <strong><?=$nbArticle?></strong> sur notre blog.</p>
<p><a href="<?= $view->path('add'); ?>">Ajouter un nouvel article</a></p>
<table>
        <tr>
                <th>#</th>
                <th>Id</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Actions</th>
        </tr>

<?php 
$i=0;
foreach ($articles as $article) : ?>
        <tr>
        <td><?=$i?></td>
        <td><?=$article->id?></td>       
        <td><?=$article->titre?></td>       
        <td><?=substr($article->contenu,0,20).' (...)'?></td>       
        <td>
                <a href="<?= $view->path('article',[$article->id]); ?>">Voir</a>
                <a href="<?= $view->path('edit',[$article->id]); ?>">Edit</a>
                <a href="<?= $view->path('delete',[$article->id]); ?>" onclick="return confirm('Etes vous certain de vouloir supprimer cet article !?')">Supprimer</a>
        </td>
        </tr>
<?php 
$i++;
endforeach; ?>

</table>
