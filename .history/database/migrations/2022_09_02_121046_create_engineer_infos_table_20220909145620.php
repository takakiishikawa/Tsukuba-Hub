<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineer_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('age');
            $table->string('address_city');
            $table->string('objective');
            $table->string('work_experience');
            $table->string('work_experience_year');
            $table->string('develpoment_language');












            $table->foreign('user_id')->references('id')->on('users');
            $table->string('language');
            $table->integer('age');
            $table->string('address');
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
        Schema::dropIfExists('engineer_infos');
    }
};
