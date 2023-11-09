<section>
    <h3>Modifier ce user</h3>
    <form method="POST">
        <?= $formEdit->label('nom') ?>
        <?= $formEdit->input('nom','text',$userEdit['nom']) ?>
        <?= $formEdit->error('nom') ?>
        <?= $formEdit->label('email') ?>
        <?= $formEdit->input('email','email',$userEdit['email']) ?>
        <?= $formEdit->error('email') ?>
        <?= $formEdit->submit('submitted','Modifier ce user') ?>
    </form>
</section>