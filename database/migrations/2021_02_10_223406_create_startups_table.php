<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
          $table->string('nom_startup');
            $table->text('description');
            $table->string('partenariat_orange');
            $table->date('date_creation');
            $table->string('ceo_co_fondateur');
            $table->string('adresses');
              $table->string('coordonnee');
            $table->string('site_web');
            $table->string('email');
            $table->string('secteur_activites');
            $table->string('statut');
            $table->text('commentaire');
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
        Schema::dropIfExists('startups');
    }
}
