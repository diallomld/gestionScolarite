<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = 'classe';

    public $timestamps = false;

    protected $primaryKey = 'numero';

    protected $fillable = [
        'idfiliere',
        'nomclasse'
    ];

    public function filiere(){
        return $this->belongsTo(Specialite::class,'idfiliere');
    }
    public function inscriptions(){
        return $this->hasMany(Inscription::class,'numero');
    }
    public function cours(){
        return $this->hasMany(Cour::class,'idcours');
    }
    public function evaluation(){
        return $this->hasMany(Evaluation::class,'numero');
    }


}
