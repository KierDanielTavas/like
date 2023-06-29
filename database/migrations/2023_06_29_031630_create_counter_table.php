<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounterTable extends Migration
{
    public function up()
    {
        Schema::create('counter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('count')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('counter');
    }
}
