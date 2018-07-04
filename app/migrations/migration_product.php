<?php

namespace App\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

require_once '../models/Db.php';

class ProductMigrate extends Migration
{

    public static function create()
    {
        Capsule::schema()->create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id');
            $table->string('article');
            $table->integer('availability');
            $table->string('brand');
            $table->text('description');
            $table->string('status');
        });
    }

    public static function delete()
    {
        Capsule::schema()->dropIfExists('products');
    }
}