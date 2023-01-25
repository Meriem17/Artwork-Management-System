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
        Schema::create('prets', function (Blueprint $table) {
            $table->id();
            $table->string('institution');
            $table->string('nomExposition');
            $table->string('dateDepart');
            $table->string('dateRetour');
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
