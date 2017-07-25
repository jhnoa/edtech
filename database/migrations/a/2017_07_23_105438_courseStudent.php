<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseStudent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseId');
            $table->string('userId');
            $table->timestamps();
            //$table->foreign('userId')->references('id')->on('users');
            //$table->foreign('userId')->references('id')->on('courseCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseStudent');
    }
}
