<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration{
    public function up(){
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->float('price');
            $table->string('name');
            $table->string('link');
            $table->string('description');
            $table->integer('in_progress')->default(0);
            $table->boolean('acquired')->default(0);
            $table->integer('duration');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('courses');
    }
}
