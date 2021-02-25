<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $table = 'evaluation';

    public $timestamps = false;

    protected $primaryKey = 'idevaluation';

    protected $fillable = [
        'idec',
        'numero',
        'dateevaluaion',
        'typeevaluation'
    ];

    public function ec(){
        return $this->belongsTo(Ec::class, 'idec');
    }
    public function classe(){
        return $this->belongsTo(Classe::class, 'numero');
    }
    public function semestre(){
        return $this->belongsTo(Semestre::class, 'idsemestre');
    }
    
    public function notes(){
        return $this->hasMany(Note::class, 'idevaluation');
    }
}
