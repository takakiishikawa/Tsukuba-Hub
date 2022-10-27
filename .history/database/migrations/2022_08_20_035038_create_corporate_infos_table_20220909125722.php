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
        Schema::create('corporate_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('mission_title');
            $table->string('mission_content');
            $table->string('product_name');
            $table->string('product_content');
            $table->string('development_language');
            $table->string('development_framework');
            $table->string('development_os');
            $table->string('development_database');
            $table->string('development_infra');
            $table->string('series');
            $table->string('tag');
            $table->date('founded');
            $table->date('headquarters_city');
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
        Schema::dropIfExists('corporate_infos');
    }
};
