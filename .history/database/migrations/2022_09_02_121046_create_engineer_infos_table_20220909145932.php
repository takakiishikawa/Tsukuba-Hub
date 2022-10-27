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
            $table->string('development_language');
            $table->string('development_framework');
            $table->string('development_os');
            $table->string('development_database');
            $table->string('development_infra');
            $table->string('expectation');
            $table->string('strength');
            $table->string('interest');
            $table->string('video');
            $table->string('image');
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
