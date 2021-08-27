<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etudiant', function (Blueprint $table) {
            $table->string('teldomicile', 20)->nullable();
            $table->string('siteweb',100)->nullable();
            $table->string('reseausocial')->nullable();
            $table->string('email',100)->nullable();
            $table->string('societe',100)->nullable();
            $table->string('profession',100)->nullable();
            $table->string('fonction',100)->nullable();
            $table->string('adressesociete',100)->nullable();
            $table->string('telbureau',100)->nullable();
            $table->string('dernieretablissement',100)->nullable();
            $table->string('niveauetude',100)->nullable();
            $table->string('diplome-titre',100)->nullable();
            $table->string('annee-frequantation',100)->nullable();
            $table->string('maladie',100)->nullable();
            $table->string('heuredebut',100)->nullable();
            $table->string('heurefin',100)->nullable();
            $table->string('fraispresinscription',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etudiant', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
