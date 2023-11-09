<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function listArticle()
    {
        $message = 'Liste des articles';
        $articles = ArticleModel::all('DESC');
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


    public function add()
    {
        $errors = [];
        
        if (!empty($_POST['submitted'])) :
           $postArticle = $this->cleanXss($_POST);
           
           $validerArticle = new Validation();
           
           $errors['titre'] = $validerArticle->textValid($postArticle['titre'],'titre',5,100);
           $errors['contenu'] = $validerArticle->textValid($postArticle['contenu'],'contenu',10,2000);
           
           if ($validerArticle->IsValid($errors)) :
            // Methode d'insertion
            ArticleModel::insert($postArticle);
            $this->redirect('articles');
           endif;

        endif;

        $formAdd = new Form($errors);

        $this->render('app.article.addarticle',array(
            'formAdd' => $formAdd,
        ));
    }

    public function delete($id)
    {
        $article = $this->isArticleExist($id);
        ArticleModel::delete($id);
        $this->redirect('articles');
    }

    public function edit($id)
    {
        $articleEdit = $this->isArticleExist($id);
        $errors = [];

        // Validation
        if (!empty($_POST['submitted'])) :
            $postArticleEdit = $this->cleanXss($_POST);
            
            $validerArticleEdit = new Validation();
            
            $errors['titre'] = $validerArticleEdit->textValid($postArticleEdit['titre'],'titre',5,100);
            $errors['contenu'] = $validerArticleEdit->textValid($postArticleEdit['contenu'],'contenu',10,2000);
            
            if ($validerArticleEdit->IsValid($errors)) :
             // Methode update
             ArticleModel::update($postArticleEdit,$id);
             $this->redirect('articles');
            endif;
 
         endif;

        $formEdit = new Form($errors);

        $this->render('app.article.editarticle',array(
            'formEdit' => $formEdit,
            'articleEdit' => $articleEdit
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
