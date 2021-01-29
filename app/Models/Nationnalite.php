<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationnalite extends Model
{
    use HasFactory;

    protected $table = 'nationnalite';

    public $timestamps = false;

    protected $primaryKey = 'idnationnalite';

    protected $fillable = [
        'nom',
    ];

    public function etudiants(){
        return $this->hasMany(Etudiant::class,'idnationnalite');
    }
}
