<?php

namespace App\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

require_once '../models/Db.php';

class productOrderMigrate extends Migration
{

    public static function create()
    {
        Capsule::schema()->create('product_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('user_phone');
            $table->text('user_comment');
            $table->integer('user_id');
            $table->timestamp('date');
            $table->text('products');
            $table->integer('status');
        });
    }

    public static function delete()
    {
        Capsule::schema()->dropIfExists('product_order');
    }
}