<?php

namespace Database\Seeders;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('etudiant')->insert([
            'idnationnalite' => 1,
            'nom' => Str::random(10),
            'prenom' => Str::random(10),
            'adresse' => Str::random(10),
            'telephone' => PhoneNumber::randomNumber(8),
            'teltuteur' => PhoneNumber::randomNumber(8),
            'nomtuteur' => Str::random(10),
            'datenaissance' => '12-12-1995',
            'genre' => Str::random(10),
            'disponibilite' => Str::random(10),
        ]);
        */
    }
}
