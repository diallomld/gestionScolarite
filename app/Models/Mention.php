<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
    use HasFactory;

    protected $table = 'mention';

    public $timestamps = false;

    protected $primaryKey = 'idmention';

    protected $fillable = [
        'nommention',
        'iddomaine'
    ];

    public function domaine(){
        return $this->belongsTo('\App\Models\Domaine','iddomaine');
    }
    public function specialites(){
        return $this->hasMany(Specialite::class,'idmention');
    }

}
