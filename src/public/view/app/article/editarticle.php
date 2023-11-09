<section>
    <h3>Modifier cet article</h3>
    <form method="POST">
        <?= $formEdit->label('titre') ?>
        <?= $formEdit->input('titre','text',$articleEdit['titre']) ?>
        <?= $formEdit->error('titre') ?>
        <?= $formEdit->label('contenu') ?>
        <?= $formEdit->textarea('contenu',$articleEdit['titre']) ?>
        <?= $formEdit->error('contenu') ?>
        <?= $formEdit->submit('submitted','Modifier cet article') ?>
    </form>
</section>