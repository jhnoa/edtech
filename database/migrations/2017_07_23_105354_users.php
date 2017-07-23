<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('type');
            $table->string('major');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('major')->references('id')->on('major');
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
}
}
