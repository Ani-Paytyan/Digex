<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lesson_id')->unsigned()->nullable();
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->bigInteger('tasks_id')->unsigned()->nullable();
            $table->foreign('tasks_id')->references('id')->on('tasks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_tasks');
    }
};
