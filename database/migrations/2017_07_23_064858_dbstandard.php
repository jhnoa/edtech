<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dbstandard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('major', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

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

        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->string('content');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users');
        });

        Schema::create('courseCode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('major');
            $table->string('year');
            $table->integer('semester');
            $table->integer('meet');
            $table->timestamps();
            $table->foreign('major')->references('id')->on('major');
        });

        Schema::create('courseLecturer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseId');
            $table->string('userId');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('userId')->references('id')->on('courseCode');
        });

        Schema::create('courseStudent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseId');
            $table->string('userId');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('userId')->references('id')->on('courseCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('major');
        Schema::dropIfExists('users');
        Schema::dropIfExists('news');
        Schema::dropIfExists('courseCode');
        Schema::dropIfExists('courseLecturer');
        Schema::dropIfExists('courseStudent');
    }
}
