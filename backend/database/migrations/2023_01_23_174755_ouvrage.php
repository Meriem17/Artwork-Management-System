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
        Schema::create('ouvrages', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('dateCreation');
            $table->string('materials');
            $table->string('support');
            $table->string('dimensions');
            $table->string('poid');
            $table->string('nbrElemt');
            $table->string('numTerage');
            $table->string('typeTirage');
            $table->string('description');
            $table->unsignedBigInteger('artiste_id');
            $table->foreign('artiste_id')->references('id')->on('artistes')->onDelete('cascade');
            

        });
       
        
        
        
        
      
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouvrages');
    }
};
