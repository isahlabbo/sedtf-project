<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservedProgrammeSessionAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserved_programme_session_admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('programmes')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('session_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('sessions')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('schedule_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('schedules')
            ->delete('restrict')
            ->update('cascade');
            $table->text('admission_no');
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
        Schema::dropIfExists('reserved_programme_session_admissions');
    }
}
