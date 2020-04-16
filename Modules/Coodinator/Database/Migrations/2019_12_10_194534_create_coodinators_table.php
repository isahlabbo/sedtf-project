<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoodinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coodinators', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('admin_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('admins')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('staff_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('staffs')
            ->delete('restrict')
            ->update('cascade');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('coodinators');
    }
}
