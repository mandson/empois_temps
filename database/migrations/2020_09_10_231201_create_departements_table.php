<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::disableForeignKeyConstraints();
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('item-dep');
                   
  $table->unsignedBigInteger('id-ufr'); 
  $table->foreign('id-ufr') 
      ->references('id') 
      ->on('ufrs') 
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
        Schema::dropIfExists('departements');
    }
}
