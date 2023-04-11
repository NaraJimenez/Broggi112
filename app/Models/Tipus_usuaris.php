<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus_usuaris extends Model
{
    use HasFactory;
    protected $table = 'tipus_usuaris';
    public function usuarios()
    {
        return $this->hasMany(Usuaris::class, 'tipus_usuaris_id');
    }
}
