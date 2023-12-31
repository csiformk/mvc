<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Recette de Cusine</title>
    <!-- <link rel="stylesheet" type="text/css" href="<?//= $view->asset('css/style.css'); ?>"> -->
    <link rel="stylesheet" type="text/css" href="view/asset/css/style.css">
  </head>
  <body>


    <header>
      <nav>
          <ul>
              <li><a href="<?= $view->path('home'); ?>">Home</a></li>
              <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
              <li><a href="<?= $view->path('articles'); ?>">Articles</a></li>
              <li><a href="<?= $view->path('admin'); ?>">Admin</a></li>
              <li><a href="<?= $view->path('admin_user'); ?>">Admin User</a></li>
          </ul>
      </nav>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer>

    </footer>

  </body>
</html>
