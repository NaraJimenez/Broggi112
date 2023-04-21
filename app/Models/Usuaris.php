<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Usuaris extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuaris';
    public $timestamps = false;

    /**
     * Get the Perfil associated with the Usuaris
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function tipus_usuari()
    {
        return $this->belongsTo(Tipus_usuari::class);
    }

    /**
     * Get all of the Cartes_trucades for the Usuaris
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'usuaris_id');
    }
}
