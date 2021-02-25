<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    protected $table = 'semestre';

    public $timestamps = false;

    protected $primaryKey = 'idsemestre';

    protected $fillable = [
        'idannescolaire',
        'libellesemestre',
        'datedebut',
        'datefin'
    ];

    public function annee(){
        return $this->belongsTo(Anneescolaire::class, 'idannescolaire');
    }
    public function evaluations(){
        return $this->hasMany(Evaluation::class,'idsemestre');
    }
}
