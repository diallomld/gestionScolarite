<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiant';

    public $timestamps = false;

    protected $primaryKey = 'matricule';

    protected $fillable = [
        'idnationnalite',
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'teltuteur',
        'nomtuteur',
        'datenaissance',
        'genre',
        'disponibilite',
    ];

    public function nationnalite(){
        return $this->belongsTo(Nationnalite::class, 'idnationnalite');
    }
    public function absences(){
        return $this->hasMany(Absence::class, 'matricule');
    }
    public function inscription(){
        return $this->hasOne(Inscription::class, 'matricule');
    }
    public function paiements(){
        return $this->hasMany(Paiement::class,'idmodepaiement');
    }
    public function notes(){
        return $this->belongsTo(Note::class, 'matricule');
    }
}
