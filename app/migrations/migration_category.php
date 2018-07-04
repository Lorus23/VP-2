<?php

namespace App\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

require_once '../models/Db.php';

class CategoryMigrate extends Migration
{

    public static function create()
    {
        Capsule::schema()->create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status');
        });
    }

    public static function delete()
    {
        Capsule::schema()->dropIfExists('category');
    }
}