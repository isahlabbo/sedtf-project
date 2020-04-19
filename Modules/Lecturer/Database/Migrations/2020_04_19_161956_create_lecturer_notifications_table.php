<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturerNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturer_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lecturer_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lecturers')
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
            $table->integer('notification_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('notifications')
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
        Schema::dropIfExists('lecturer_notifications');
    }
}
