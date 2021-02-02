<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;

    protected $table = 'cours';
    public $timestamps = false;

    protected $primaryKey = 'idcours';

    protected $fillable = [
        'numero',
        'idec',
        'idsalle',
        'nomcours',
        'desccours',
        'heuredebut',
        'heurefin',
        'duree'
    ];

    public function classe(){
        return $this->belongsTo(Classe::class,'numero');
    }
    public function ec(){
        return $this->belongsTo(Ec::class,'idec');
    }
    public function salle(){
        return $this->belongsTo(Salle::class,'idsalle');
    }
    public function absences(){
        return $this->hasMany(Absence::class,'idcours');
    }
}
