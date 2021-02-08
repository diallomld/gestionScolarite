<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    protected $table = 'domaine';

    //public $timestamps = false;

    protected $primaryKey = 'iddomaine';

    protected $fillable = [
        'nomdomaine',
    ];

    public function mentions(){
        return $this->hasMany(Mention::class,'iddomaine');
    }
}
