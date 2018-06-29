<?php

namespace App\models;
require_once 'Db.php';

class User
{
    public function add($data)
    {
        $input = [
            'name' => null,
            'age' => null,
            'description' => null,
            'login' => null,
            'password' => null
        ];

        foreach ($input as $key => $value) {
            if (!empty($data[$key])) {
                $input[$key] = $data[$key];
            }
        }

        // Соединение с БД
        $pdo = connect();
        // Текст запроса к БД
        $sql = "INSERT INTO users (name,age,description,login,password) VALUES (:name, :age, :description, :login, :password)";
        // Получение и возврат результатов. Используется подготовленный запрос
        $stm = $pdo->prepare($sql);
        $inserted = $stm->execute($input);

        if ($inserted) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $pdo->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    public static function getUserList()
    {
        $pdo = connect();
        // Получение и возврат результатов.
        $sql = 'SELECT `id`,`name`, `age`, `description`, `login` FROM `users`';
        $result = $pdo->query($sql);
        $userList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $userList[$i]['id'] = $row['id'];
            $userList[$i]['name'] = $row['name'];
            $userList[$i]['age'] = $row['age'];
            $userList[$i]['description'] = $row['description'];
            $userList[$i]['login'] = $row['login'];
            $i++;
        }
        return $userList;
    }

    public function deleteUserById($id)
    {
        $pdo = connect();
        // Текст запроса к БД
        $sql = 'DELETE FROM users WHERE id = :id';
        // Получение и возврат результатов.
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id);
        return $result->execute();
    }

    public function checkUserData($login, $password)
    {
        // Соединение с БД
        $pdo = connect();

        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE login = :login AND password = :password';

        // Получение результатов. Используется подготовленный запрос
        $result = $pdo->prepare($sql);
        $result->bindParam(':login', $login);
        $result->bindParam(':password', $password);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id'];
        }
        return false;
    }

    /**
     * Проверяет не занят ли login другим пользователем
     * @param type $login <p>login</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public function checkLoginExists($login)
    {
        // Соединение с БД
        $pdo = connect();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM users WHERE login = :login';

        // Получение результатов. Используется подготовленный запрос
        $result = $pdo->prepare($sql);
        $result->bindParam(':login', $login);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /*
     * Записывает в сессию пользователя
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    /*
     * Проверка на авторизацию пользователя
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
}


