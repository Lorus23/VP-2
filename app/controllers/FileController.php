<?php

namespace App\controllers;

use App\core\View;
use App\models\User;
use App\models\File;

class FileController extends MainController
{
    public function fileList()
    {
        $data = new User();
        $filesList = $data->getUserList();


        require_once __DIR__ . '\..\views\filelist.php';
//        $this->view->render('filelist');
    }

    public function deleteFile($id)
    {
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем фото
            $del = new File();
            $del = $del->deleteFileById($id);

            header("Location: /file/fileList");
        }

        // Подключаем вид
        $this->view->render('delete');
        return true;
    }

}