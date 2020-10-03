<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationTypeSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_type_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qualification_type_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('qualification_types')
            ->delete('restrict')
            ->update('cascade');
            $table->string('subject');
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
        Schema::dropIfExists('qualification_type_subjects');
    }
}
