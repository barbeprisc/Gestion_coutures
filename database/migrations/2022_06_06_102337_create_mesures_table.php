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
            $table->integer('dos');
            $table->integer('epaule');
            $table->integer('poitrine');
            $table->integer('long_manche');
            $table->integer('tour_manche');
            $table->integer('long_taille');
            $table->integer('tour_taille');
            $table->integer('pinces');
            $table->integer('long_camisole');
            $table->integer('long_robe');
            $table->integer('long_chemise');
            $table->integer('ceinture');
            $table->integer('bassin');
            $table->integer('cuisse');
            $table->integer('genoux');
            $table->integer('long_jupe');
            $table->integer('long_pantalon');
            $table->integer('bas');
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
