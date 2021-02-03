<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiement';
    public $timestamps = false;

    protected $primaryKey = 'idpaiement';

    protected $fillable = [
        'idmodepaiement',
        'matricule',
        'montant',
        'datepaiment',
        'mois',
        'observation'
    ];

    public function modePaiement(){
        return $this->belongsTo(ModePaiement::class,'idmodepaiement');
    }
    public function etudiant(){
        return $this->belongsTo(Etudiant::class, 'matricule');
    }
}
