<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturerCourseResultUploadNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturer_course_result_upload_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lecturer_course_result_upload_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lecturer_course_result_uploads')
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
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('lecturer_course_result_upload_notifications');
    }
}
