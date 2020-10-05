<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('application_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('applications')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('qualification_type_subject_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('qualification_type_subjects')
            ->delete('restrict')
            ->update('cascade');
            
            $table->string('grade')->nullable();
            $table->string('year')->nullable();
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
        Schema::dropIfExists('application_qualifications');
    }
}
