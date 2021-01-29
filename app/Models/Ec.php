<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec extends Model
{
    use HasFactory;

    protected $table = 'ec';

    public $timestamps = false;

    protected $primaryKey = 'idec';

    protected $fillable = [
        'iduea',
        'cm',
        'nomec',
        'td',
        'tpe',
        'sigleec',
    ];

    public function ue(){
        return $this->belongsTo(Ue::class,'iduea');
    }
}
