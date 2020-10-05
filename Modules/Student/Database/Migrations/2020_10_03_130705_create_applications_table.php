<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('programmes')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('gender_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('genders')
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

            $table->integer('marital_status_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('marital_statuses')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('address_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('addresses')
            ->delete('restrict')
            ->update('cascade');

            $table->integer('sponsor_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('sponsors')
            ->delete('restrict')
            ->update('cascade');
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('image');
            $table->string('date_of_birth');
            $table->string('application_no');
            
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
        Schema::dropIfExists('applications');
    }
}
