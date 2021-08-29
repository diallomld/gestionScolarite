<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToInscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscription', function (Blueprint $table) {
            $table->integer('fraisscolarite')->nullable()->default(0);
            $table->integer('fraisinscription')->nullable()->default(0);
            $table->integer('fraisexamen')->nullable()->default(0);
            $table->integer('fraisuniforme')->nullable()->default(0);
            $table->integer('fraissoutenance')->nullable()->default(0);
            $table->integer('fraisdossier')->nullable()->default(0);
            $table->integer('fraisassurance')->nullable()->default(0);
            $table->integer('fraisamical')->nullable()->default(0);
            $table->integer('fraisbibliotheque')->nullable()->default(0);
            $table->integer('fraisstage')->nullable()->default(0);
            $table->integer('fraiscantine')->nullable()->default(0);
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
            $table->dropIfExists();
        });
    }
}
