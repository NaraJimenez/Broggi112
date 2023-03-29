<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Tipus_usuaris extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Usuari that owns the Tipus_Usuaris
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function usuaris(): hasMany
    {
        return $this->hasMany(Usuaris::class, 'tipus_usuaris_id');
    }
}
