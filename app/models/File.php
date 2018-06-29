<?php

namespace App\models;

class File
{
    public static function deleteFileById($id)
    {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/images/avatar' . $id . '.jpg');
    }

}