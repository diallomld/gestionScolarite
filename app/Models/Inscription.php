<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $table = 'inscription';

    public $timestamps = false;

    protected $primaryKey = 'numinscription';

    protected $fillable = [
        'matricule',
        'numero',
        'idannescolaire',
        'dateinscription',
    ];

    public function classe(){
        return $this->belongsTo(Classe::class,'numero');
    }
    public function partenaire(){
        return $this->belongsTo(Partenaire::class,'partenaire_id');
    }
    public function etudiant(){
        return $this->belongsTo(Etudiant::class,'matricule');
    }
    public function annee(){
        return $this->belongsTo(Anneescolaire::class,'idannescolaire');
    }
}
