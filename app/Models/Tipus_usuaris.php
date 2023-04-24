<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipus_usuaris extends Model
{
    use HasFactory;

    protected $table = 'tipus_usuaris';
    public $timestamps = false;

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuaris::class, 'tipus_usuaris_id');
    }
}
