<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToInscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscription', function (Blueprint $table) {
            $table->bigInteger('fraisscolarite')->nullable()->default(0);
            $table->bigInteger('fraisinscription')->nullable()->default(0);
            $table->bigInteger('fraisexamen')->nullable()->default(0);
            $table->bigInteger('fraisuniforme')->nullable()->default(0);
            $table->bigInteger('fraissoutenance')->nullable()->default(0);
            $table->bigInteger('fraisdossier')->nullable()->default(0);
            $table->bigInteger('fraisassurance')->nullable()->default(0);
            $table->bigInteger('fraisamical')->nullable()->default(0);
            $table->bigInteger('fraisbibliotheque')->nullable()->default(0);
            $table->bigInteger('fraisstage')->nullable()->default(0);
            $table->bigInteger('fraiscantine')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscription', function (Blueprint $table) {
            //
        });
    }
}
