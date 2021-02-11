<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_structure');
            $table->text('description');
            $table->string('partenariat_orange');
            $table->string('nom_prenom_directeur');
            $table->string('adresses');
            $table->string('coordonnee');
            $table->string('site_web');
            $table->string('email');
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
        Schema::dropIfExists('financieres');
    }
}
