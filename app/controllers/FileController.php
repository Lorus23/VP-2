<?php

namespace App\controllers;
use App\core\View;

class FileController extends MainController
{
    public function fileList()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('filelist', $data);
    }

}