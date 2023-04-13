<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Provincies extends Model
{
    use HasFactory;

    public $table = 'provincies';
    public $primaryKey = 'id'; //Por defecto es id
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;

    /**
     * Get all of the Cartes_trucades for the Provincies
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function Cartes_trucades(): hasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'provincies_id');
    }

    /**
     * Get all of the Comarques for the Provincies
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function Comarques(): hasMany
    {
        return $this->hasMany(Comarques::class, 'provincies_id');
    }
}
