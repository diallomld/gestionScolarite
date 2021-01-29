<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anneescolaire extends Model
{
    use HasFactory;

    protected $table = 'anneescolaire';

    public $timestamps = false;

    protected $primaryKey = 'idannescolaire';

    protected $fillable = [
        'anneescolaire',
        'statut'
    ];

    public function semestres(){
        return $this->hasMany(Semestre::class,'idannescolaire');
    }
    public function inscriptions(){
        return $this->hasMany(Inscription::class,'idannescolaire');
    }


}
