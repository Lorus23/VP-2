<?php

namespace App\models;

use App\config\Db;

class User
{
    public static function add($data)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "INSERT INTO users (name,age,description,photo,login,password) VALUES (:name, :age, :description, :photo, :login, :password)";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $password = md5($data['password']);
        $values = (object)$data;
        $result->bindParam(':name', $values->name);
        $result->bindParam(':age', $values->age);
        $result->bindParam(':description', $values->description);
        $result->bindParam(':photo', $values->photo);
        $result->bindParam(':login', $values->login);
        $result->bindParam(':password', $password);
    }
}