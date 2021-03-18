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

    public function evaluation(){
        return $this->belongsTo(Evaluation::class, 'idevaluation');
    }
    public function etudiant(){
        return $this->belongsTo(Etudiant::class, 'matricule');
    }
}
