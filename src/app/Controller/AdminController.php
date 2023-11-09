<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Weblitzer\Controller;

/**
 *
 */
class AdminController extends Controller
{

    public function index()
    {
        $message = 'Admin des articles';
        $articles = ArticleModel::all('DESC');
        $nbArticle = ArticleModel::count();

        $this->render('app.admin.index',array(
            'message' => $message,
            'articles' => $articles,
            'nbArticle' => $nbArticle
        ));
    }
   


}
