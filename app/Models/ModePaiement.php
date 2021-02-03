<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModePaiement extends Model
{

    protected $table = 'modepaiement';

    public $timestamps = false;

    protected $primaryKey = 'idmodepaiement';

    protected $fillable = [
        'liellemodepaiement',

    ];
    use HasFactory;

    public function paiements(){
        return $this->hasMany(Paiement::class,'idmodepaiement');
    }
}
