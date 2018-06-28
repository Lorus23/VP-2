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
        $result = $pdo->query('SELECT `id`,`name`, `age`, `description`, `login` FROM `users`');
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
}