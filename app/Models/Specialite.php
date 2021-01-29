<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;

    protected $table = 'specialite';

    public $timestamps = false;

    protected $primaryKey = 'idfiliere';

    protected $fillable = [
        'nomfiliere',
        'idmention'
    ];

    public function mention(){
        return $this->belongsTo(Mention::class,'idmention');
    }
    public function uniteEnseignements(){
        return $this->belongsTo(Ue::class,'idfiliere');
    }

    public function classes(){
        return $this->hasMany(Classe::class,'idfiliere');
    }

}
