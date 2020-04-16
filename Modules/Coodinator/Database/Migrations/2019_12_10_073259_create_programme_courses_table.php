<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('programmes')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('course_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('courses')
            ->delete('restrict')
            ->update('cascade');
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
        Schema::dropIfExists('programme_courses');
    }
}
