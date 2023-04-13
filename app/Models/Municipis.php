<?php

namespace App\Models;

//use App\Models\Agencies;
//use App\Models\Comarques;
//use App\Models\Cartes_trucades;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipis extends Model
{
    use HasFactory;

    public $table = 'municipis';
    public $primaryKey = 'id'; //Por defecto es id
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;

    /**
     * Get the Comarques that owns the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Comarques(): BelongsTo
    {
        return $this->belongsTo(Comarques::class, 'comarques_id');
    }

    /**
     * Get all of the Cartes_trucades for the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Cartes_trucades(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'municipis_id');
    }

    /**
     * Get all of the Cartes_trucades (trucada) for the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   /* public function Cartes_trucades_trucada(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'municipis_id_trucada');
    }*/

    /**
     * The Agencies that belong to the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function Agencies(): hasMany
    {
        return $this->hasMany(Agencies::class, 'municipis_id');
    }
}
