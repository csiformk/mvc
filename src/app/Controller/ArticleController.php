<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function listArticle()
    {
        $message = 'Liste des articles';
        $articles = ArticleModel::all();
        $nbArticle = ArticleModel::count();

        $this->render('app.article.listarticle',array(
            'message' => $message,
            'articles' => $articles,
            'nbArticle' => $nbArticle
        ));
    }

    public function show($id)
    {
        $article = ArticleModel::findById($id);
        
        $this->render('app.article.showarticle',array(
            'article' => $article,
        ));
    }



}
