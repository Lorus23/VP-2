<?php

namespace App\controllers;

use App\controllers\MainController;
use App\core\View;
use App\models\User;
use Faker;
use GUMP;

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
            $password = md5($_POST['password']);

            // Флаг ошибок
            $errors = false;

            // Проверяем существует ли пользователь
            $userId = User::where('login', $login)->where('password', $password)->first();

//            checkUserData($login, $password);

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
        $this->view->render('index', []);
        return true;
    }

    public function registration()
    {
        // Обработка формы
        if (!empty($_POST)) {
            // Если форма отправлена
            // Получаем данные из формы
            if ($_POST['password'] != $_POST['password-again']) {
                echo 'Пароли не совпадают, заполните форму корректно!';
            } else {
                $is_valid = GUMP::is_valid($_POST, [
                    'name' => 'required',
                    'age' => 'required|numeric',
                    'description' => 'required',
                    'login' => 'required',
                    'password' => 'required|max_len,100|min_len,4',
                    'password-again' => 'required|max_len,100|min_len,4',
                ]);
                $data = $_POST;

                if ($is_valid === true) {
                    // Флаг ошибок в форме
                    $errors = false;
                    // При необходимости можно валидировать значения нужным образом


                    $checkLoginExists = User::where('login', $_POST['login'])->first();
//            $checkLoginExists->checkLoginExists($data['login']);

                    if ($checkLoginExists) {
                        $errors[] = 'Такой логин уже используется';
                    }

                    if ($errors == false) {
                        // Если ошибок нет
                        // Добавляем нового пользователя
                        $result = new User();
                        $result = $result->add($data);
                        // Если запись добавлена
                        if ($result == true) {
                            // Проверим, загружалось ли через форму изображение
                            if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
                                // Если загружалось, переместим его в нужную папке, дадим новое имя
                                move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/images/avatar{$result}.jpg");
                            }
                        }
                    }
                } else {
                    print_r($is_valid);
                }
            }
        }
        $this->view->render('reg', []);
        return true;

    }

    public function userList()
    {
        $usersList = User::all();


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
        $this->view->render('delete', []);
        return true;
    }

    public function editUser($id)
    {
        if (!empty($_POST)) {
            // Если форма отправлена
            // Получаем данные из формы
            if ($_POST['password'] != $_POST['password-again']) {
                echo 'Пароли не совпадают, заполните форму корректно!';
            } else {
                $is_valid = GUMP::is_valid($_POST, [
                    'name' => 'required',
                    'age' => 'required|numeric',
                    'description' => 'required',
                    'login' => 'required',
                    'password' => 'required|max_len,100|min_len,4',
                    'password-again' => 'required|max_len,100|min_len,4',
                ]);
                $data = $_POST;

                if ($is_valid === true) {
                    // Если ошибок нет
                    // Добавляем нового пользователя
                    $result = new User();
                    $result = $result->editUserById($id, $data);
                    // Если запись добавлена
                    if ($result == true) {
                        // Проверим, загружалось ли через форму изображение
                        if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
                            // Если загружалось, переместим его в нужную папке, дадим новое имя
                            move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/images/avatar{$result}.jpg");
                        }
                    }
                } else {
                    print_r($is_valid);
                }
            }
        }
        $userlist = User::where('id', $id)->first()->toArray();

        $this->view->render('edit', $userlist);
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

    public function userFaker()
    {
        for ($i = 0; $i < 30; $i++) {
            $faker = Faker\Factory::create();
            $user = new User();
            $data = [
                'name' => $faker->name,
                'age' => rand(0, 110),
                'description' => $faker->text(200),
                'login' => $faker->userName,
                'password' => $faker->password,
            ];
            $user->add($data);
        }

    }
}
