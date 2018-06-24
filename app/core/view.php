<?php

namespace App\core;


class View
{
    public function render(String $fileName, array $data)
    {
        require_once __DIR__ . "/../views/" .$fileName.".php";

    }

}