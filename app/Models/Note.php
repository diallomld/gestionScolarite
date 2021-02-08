<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'note';

    public $timestamps = false;

    protected $primaryKey = 'idnote';

    protected $fillable = [
        'idec',
        'note',
    ];
    public function ec(){
        return $this->belongsTo(Ec::class, 'idec');
    }
}
