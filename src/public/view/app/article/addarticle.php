<section>
    <h3>Ajouter un nouvel article</h3>
    <form method="POST">
        <?= $formAdd->label('titre') ?>
        <?= $formAdd->input('titre') ?>
        <?= $formAdd->error('titre') ?>
        <?= $formAdd->label('contenu') ?>
        <?= $formAdd->textarea('contenu') ?>
        <?= $formAdd->error('contenu') ?>
        <?= $formAdd->submit('submitted','Ajouter ce nouvel article') ?>
    </form>
</section>