<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::disableForeignKeyConstraints();
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('item-mod');
            $table->integer('coefficient');


  /******@FTK Clee etrangere de la table  MODULE */
                  
  $table->unsignedBigInteger('id-fil'); 
  $table->foreign('id-fil') 
      ->references('id') 
      ->on('filieres') 
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
        Schema::dropIfExists('modules');
    }
}
