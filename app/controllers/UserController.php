<?php

namespace App\controllers;

use App\controllers\MainController;

class UserController extends MainController
{
    public function index()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('userlist', $data);
    }

    public function registration()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('reg', $data);
    }

}

