<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

require_once 'Db.php';


class User extends Model
{
    public $timestamps = false;

    public static function add($arr)
    {
        $data = new User();
        $data->name = $arr['name'];
        $data->age = $arr['age'];
        $data->description = $arr['description'];
        $data->login = $arr['login'];
        $data->password = md5($arr['password']);
        // Если запись добавлена
        $data->save();
        return true;
    }

    public static function deleteUserById($id)
    {
        $user =  User::find($id);
        $user -> delete();
    }
    public static function editUserById($id,$arr)
    {
        $data = User::find($id);
        $data->name = $arr['name'];
        $data->age = $arr['age'];
        $data->description = $arr['description'];
        $data->login = $arr['login'];
        $data->password = md5($arr['password']);
        // Если запись добавлена
        $data->save();
        return true;
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

