<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->integer('dos')->nullable();
            $table->integer('epaule')->nullable();
            $table->integer('poitrine')->nullable();
            $table->integer('long_manche')->nullable();
            $table->integer('tour_manche')->nullable();
            $table->integer('long_taille')->nullable();
            $table->integer('tour_taille')->nullable();
            $table->integer('pinces')->nullable();
            $table->integer('long_camisole')->nullable();
            $table->integer('long_robe')->nullable();
            $table->integer('long_chemise')->nullable();
            $table->integer('ceinture')->nullable();
            $table->integer('bassin')->nullable();
            $table->integer('cuisse')->nullable();
            $table->integer('genoux')->nullable();
            $table->integer('long_jupe')->nullable();
            $table->integer('long_pantalon')->nullable();
            $table->integer('bas')->nullable();
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mesures');
    }
}
