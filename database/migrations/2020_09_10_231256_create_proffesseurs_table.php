<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProffesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    Schema::disableForeignKeyConstraints();
        Schema::create('proffesseurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('contact');
            $table->string('email');
           

             /******@FTK Clee etrangere de la table  grades*/
          
                
  $table->unsignedBigInteger('id-grad'); 
  $table->foreign('id-grad') 
      ->references('id') 
      ->on('grades') 
      ->onDelete('restrict') 
      ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proffesseurs');
    }
}
