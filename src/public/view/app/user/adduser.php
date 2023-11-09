<section>
    <h3>Ajouter un nouveau user</h3>
    <form method="POST">
        <?= $formAdd->label('nom') ?>
        <?= $formAdd->input('nom') ?>
        <?= $formAdd->error('nom') ?>
        <?= $formAdd->label('email') ?>
        <?= $formAdd->input('email','email') ?>
        <?= $formAdd->error('email') ?>
        <?= $formAdd->submit('submitted','Ajouter ce user') ?>
    </form>
</section>