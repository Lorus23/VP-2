<?php

namespace App\controllers;

use App\controllers\MainController;
use App\core\View;
use App\models\User;

class UserController extends MainController
{
    public function index()
    {
        // Переменные для формы
        $login = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Проверяем существует ли пользователь
            $userId = new User();
            $userId = $userId->checkUserData($login, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть
                header("Location: /user/userList");
            }
        }

        // Подключаем вид
        $this->view->render('index');
        return true;
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

        $checkLoginExists = new User();
        $checkLoginExists = $checkLoginExists->checkLoginExists($data['login']);

        if ($checkLoginExists) {
            $errors[] = 'Такой логин уже используется';
        }

        if ($errors == false) {
            // Если ошибок нет
            // Добавляем нового пользователя
            $id = new User();
            $result = $id->add($data);

            // Если запись добавлена
            if ($result) {
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/images/avatar{$result}.jpg");
                }
            };
        }

        $this->view->render('reg');
        return true;

    }

    public function userList()
    {
        $data = new User();
        $usersList = $data->getUserList();

//        $this->view->render('userlist');

        require_once __DIR__ . '\..\views\userlist.php';
    }

    public function deleteUser($id)
    {
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем пользователя
            $del = new User();
            $del = $del->deleteUserById($id);

            header("Location: /user/userList");
        }

        // Подключаем вид
        $this->view->render('delete');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function logout()
    {
        // Стартуем сессию
        session_start();

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }

}
