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
        $article = $this->isArticleExist($id);
        
        $this->render('app.article.showarticle',array(
            'article' => $article,
        ));
    }

    public function isArticleExist($id)
    {
        $article = ArticleModel::findById($id);
        
/*         if (empty($article)):
            $this->Abort404();
        endif;

        return $article; */

        return (empty($article)) ? $this->Abort404() :  $article;
    }



}
