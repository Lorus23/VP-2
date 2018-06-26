<?php

namespace App\controllers;

use App\core\View;

class MainController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('index', $data);
    }

    public function registration()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('reg', $data);
    }

    public function userList()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('userlist', $data);
    }


    public function fileList()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('filelist', $data);
    }

}