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
        Schema::create('ficheOeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('nomRedacteur');
            $table->string('DateRedaction');
            $table->string('dateModification');
            $table->unsignedBigInteger('ouvrage_id');
            $table->foreign('ouvrage_id')->references('id')->on('ouvrages')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
