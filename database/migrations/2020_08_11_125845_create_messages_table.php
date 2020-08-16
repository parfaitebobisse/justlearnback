<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emetteur_id');
            $table->foreign('emetteur_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('recepteur_id')->nullable();
            $table->foreign('recepteur_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('espace_echange_id')->nullable();
            $table->foreign('espace_echange_id')->references('id')->on('espace_echanges')->onDelete('cascade');
            $table->text('contenu');
            $table->string('fichier');
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
        Schema::dropIfExists('messages');
    }
}
