<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::disableForeignKeyConstraints();
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('heur-d');
            $table->string('heur-f');
            $table->string('nbr-jours');

            $table->softDeletes();
            $table->timestamps();

        
        
            /******@FTK Clee etrangere de la table   */
                        
        $table->unsignedBigInteger('id-ufr'); 
        $table->foreign('id-ufr') 
            ->references('id') 
            ->on('ufrs') 
            ->onDelete('restrict') 
            ->onUpdate('restrict');
                        
    
        $table->unsignedBigInteger('id-lieu'); 
        $table->foreign('id-lieu') 
            ->references('id') 
            ->on('lieus') 
            ->onDelete('restrict') 
            ->onUpdate('restrict');

            $table->unsignedBigInteger('id-cat'); 
            $table->foreign('id-cat') 
                ->references('id') 
                ->on('categorie_progs') 
                ->onDelete('restrict') 
                ->onUpdate('restrict');

                $table->unsignedBigInteger('id-prof'); 
                $table->foreign('id-prof') 
                    ->references('id') 
                    ->on('proffesseurs') 
                    ->onDelete('restrict') 
                    ->onUpdate('restrict');

                    $table->unsignedBigInteger('id-niv'); 
                    $table->foreign('id-niv') 
                        ->references('id') 
                        ->on('niveaux') 
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
        Schema::dropIfExists('programmes');
    }
}
