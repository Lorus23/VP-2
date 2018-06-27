<?php

namespace App\controllers;

use App\controllers\MainController;
use App\models\User;

class UserController extends MainController
{
    public function index()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('index');
    }

    public function registration()
    {
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $data = $_POST;
        }
        // Флаг ошибок в форме
        $errors = false;
        // При необходимости можно валидировать значения нужным образом
        if (!isset($data['name']) || empty($data['name'])) {
            $errors[] = 'Заполните поля';
        }

        if ($errors == false) {
            // Если ошибок нет
            // Добавляем новый товар
            $id = new User();
            $regId = $id->add($data);
            return $regId;
            // Если запись добавлена
//            if ($id) {
//                // Проверим, загружалось ли через форму изображение
//                if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
//                    // Если загружалось, переместим его в нужную папке, дадим новое имя
//                    move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/images/{$id}.jpg");
//                }
//            };
        }
        $this->view->render('reg');
    }

    public function userList()
    {
        $data = [
            'users' => "user1"
        ];
        $this->view->render('userlist', $data);
    }
}

