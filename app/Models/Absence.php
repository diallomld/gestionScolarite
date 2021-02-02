<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $table = 'absence';

    public $timestamps = false;

    protected $primaryKey = 'idabsence';

    protected $fillable = [
        'idcours',
        'matricule',
        'motif',
        'dateabsence',
        
    ];

    public function cour(){
        return $this->belongsTo(Cour::class, 'idcours');
    }
    public function etudiant(){
        return $this->belongsTo(Etudiant::class, 'matricule');
    }
}
