<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ue extends Model
{
    use HasFactory;
    protected $table = 'uniteenseignment';

    public $timestamps = false;

    protected $primaryKey = 'iduea';

    protected $fillable = [
        'descuea',
        'typeue',
        'sigleue',
        'idfiliere'
    ];

    public function filiere(){
        return $this->belongsTo(Specialite::class,'idfiliere');
    }
}
