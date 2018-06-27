<?php

namespace App\core;


class View
{
    public function render(String $fileName)
    {
        require_once __DIR__ . "/../views/" .$fileName.".php";

    }

}