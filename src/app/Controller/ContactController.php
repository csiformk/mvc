<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function contactMethode()
    {
        $message = 'Page de contact';
        $fruits = ['pomme','banane','poire'];

        $this->render('app.default.contact',array(
            'message' => $message,
            'fruits' => $fruits
        ));
    }

}
