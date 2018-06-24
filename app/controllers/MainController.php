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
    public function index(){
        $data = [
            'users'=>"user1"
        ];
        $this->view->render('index',$data);
    }

}