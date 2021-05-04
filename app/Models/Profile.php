<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = [
        'nomprofile',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
