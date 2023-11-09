<h2><?=$message?></h2>
<p>Actuellement il y a <strong><?=$nbUser?></strong> user.</p>
<p><a href="<?= $view->path('add_user'); ?>">Ajouter un nouvel user</a></p>
<table>
        <tr>
                <th>#</th>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Actions</th>
        </tr>

<?php 
$i=1;
foreach ($users as $user) : ?>
        <tr>
        <td><?=$i?></td>
        <td><?=$user->id?></td>       
        <td><?=$user->nom?></td>       
        <td><?=substr($user->email,0,20).' (...)'?></td>       
        <td>
                <a href="<?= $view->path('show_user',[$user->id]); ?>">Voir</a>
                <a href="<?= $view->path('edit_user',[$user->id]); ?>">Edit</a>
                <a href="<?= $view->path('delete_user',[$user->id]); ?>" onclick="return confirm('Etes vous certain de vouloir supprimer cet user !?')">Supprimer</a>
        </td>
        </tr>
<?php 
$i++;
endforeach; ?>

</table>
