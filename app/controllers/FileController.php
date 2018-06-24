<?php

namespace App\controllers;


class FileController extends MainController
{
    public function index(){
        $data = [
            'users' => "user1"
        ];
        $this->view->render('filelist', $data);
    }

}