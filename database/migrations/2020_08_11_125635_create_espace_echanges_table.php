<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaceEchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espace_echanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cour_id');
            $table->foreign('cour_id')->references('id')->on('cours')->onDelete('cascade');
            /* type forum ou diffusion */
            $table->string('type');
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
        Schema::dropIfExists('espace_echanges');
    }
}
