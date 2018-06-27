<?php

namespace App\models;
use App\models\Db;

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
        // Соединение с БД
        $pdo = connect();
        // Текст запроса к БД
        $sql = "INSERT INTO users (name,age,description,login,password) VALUES (:name, :age, :description, :login, :password)";
        // Получение и возврат результатов. Используется подготовленный запрос
        $stm = $pdo->prepare($sql);
        $inserted = $stm->execute($input);
        if ($inserted) {
            return $input;
        }
        return null;
    }
}