<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('notification_type_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('notification_types');

            $table->integer('notification_title_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('notification_titles');

            $table->integer('notification_to_id')
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('notification_tos')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('programme_id')
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('programmes')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('student_id')
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('students')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('lecturer_id')
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lecturers')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('session_id')
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('sessions')
            ->delete('restrict')
            ->update('cascade');
            $table->text('comment');
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
        Schema::dropIfExists('notifications');
    }
}
