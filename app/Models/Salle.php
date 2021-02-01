<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $table = 'salle';

    public $timestamps = false;

    protected $primaryKey = 'idsalle';


    protected $fillable = [
        'idsalle',
        'nomsalle',
        'capacite'
    ];

    public function cours(){
        return $this->hasMany(Cour::class,'idcours');
    }
}
