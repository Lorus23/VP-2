<?php

namespace App\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

require_once '../models/Db.php';

class UserMigrate extends Migration
{

    public static function create()
    {
        Capsule::schema()->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
        });
    }

    public static function delete()
    {
        Capsule::schema()->dropIfExists('users');
    }
}