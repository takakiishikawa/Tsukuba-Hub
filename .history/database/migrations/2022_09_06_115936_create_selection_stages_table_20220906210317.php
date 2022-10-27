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
        Schema::create('selection_stages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('both_nice_id');
            $table->foreign('both_nice_id')->references('id')->on('both_nices');
            $table->unsignedBigInteger('selection_flow_id');

            $table->foreign('selection_flow_id')->references('id')->('selection_flows');
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
        Schema::dropIfExists('selection_stages');
    }
};
