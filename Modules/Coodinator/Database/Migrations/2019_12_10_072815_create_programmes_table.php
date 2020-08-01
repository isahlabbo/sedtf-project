<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_type_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('programme_types')
            ->delete('restrict')
            ->update('cascade');
            $table->string('name');
            $table->integer('fee');
            $table->integer('duration');
            $table->text('about');
            $table->text('code');
            $table->integer('semesters')->default(1);
            $table->integer('batches')->default(2);
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('programmes');
    }
}
