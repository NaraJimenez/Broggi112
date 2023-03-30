<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interlocutors extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get all of the Cartes_trucades for the Interlocutors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'interlocutors_id');
    }

    /**
     * Get all of the Cartes_trucades (trucada) for the Interlocutors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades_trucada(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'interlocutors_id_trucada');
    }
}
