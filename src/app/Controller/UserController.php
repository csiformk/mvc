<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;

/**
 *
 */
class UserController extends Controller
{

    public function list()
    {
        $message = 'Liste des users';
        $users = UserModel::all('DESC');
        $nbUser = UserModel::count();

        $this->render('app.user.listuser',array(
            'message' => $message,
            'users' => $users,
            'nbUser' => $nbUser
        ));
    }

    public function show($id)
    {
        $user = $this->isUserExist($id);
        
        $this->render('app.user.showuser',array(
            'user' => $user,
        ));
    }


    public function add()
    {
        $errors = [];
        
        if (!empty($_POST['submitted'])) :
           $postUser = $this->cleanXss($_POST);
           
           $validerUser = new Validation();
           
           $errors['nom'] = $validerUser->textValid($postUser['nom'],'nom',5,100);
           $errors['email'] = $validerUser->textValid($postUser['email'],'email',5,20);
           
           if ($validerUser->IsValid($errors)) :
            // Methode d'insertion
            UserModel::insert($postUser);
            $this->redirect('admin_user');
           endif;

        endif;

        $formAdd = new Form($errors);

        $this->render('app.user.adduser',array(
            'formAdd' => $formAdd,
        ));
    }

    public function delete($id)
    {
        $user = $this->isUserExist($id);
        UserModel::delete($id);
        $this->redirect('admin_user');
    }

    public function edit($id)
    {
        $userEdit = $this->isUserExist($id);
        $errors = [];

        // Validation
        if (!empty($_POST['submitted'])) :
            $postUserEdit = $this->cleanXss($_POST);
            
            $validerUsereEdit = new Validation();
            
            $errors['nom'] = $validerUsereEdit->textValid($postUserEdit['nom'],'nom',5,100);
            $errors['email'] = $validerUsereEdit->textValid($postUserEdit['email'],'email',5,20);
            
            if ($validerUsereEdit->IsValid($errors)) :
             // Methode update
             UserModel::update($postUserEdit,$id);
             $this->redirect('admin_user');
            endif;
 
         endif;

        $formEdit = new Form($errors);

        $this->render('app.user.edituser',array(
            'formEdit' => $formEdit,
            'userEdit' => $userEdit
        ));        

    }


    public function isUserExist($id)
    {
        $user = UserModel::findById($id);
        
        return (empty($user)) ? $this->Abort404() :  $user;
    }


}
