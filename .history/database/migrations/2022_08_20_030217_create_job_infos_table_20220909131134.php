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
        Schema::create('job_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('recruitment_job');
            $table->string('recruitment_position');
            $table->string('job_content');
            $table->string('team_name');
            $table->integer('team_size');
            $table->string('must_technology');
            $table->string('better_technology');
            $table->string('must_personality');
            $table->string('better_personality');
            $table->integer('hire_size');
            $table->string()













            $table->string('job_type');
            $table->string('position');
            $table->string('job_description');
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
        Schema::dropIfExists('job_infos');
    }
};
