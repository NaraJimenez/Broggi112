<?php

namespace App\Models;

//use App\Models\Cartes_trucades;
//use App\Models\Estats_expedients;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Relations\hasMany;

class Expedients extends Model
{
    use HasFactory;

    public $table = 'expedients';
    public $primaryKey = 'id'; //Por defecto es id
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;

    /**
     * Get the Estats_expedients that owns the Expedients
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    /**
     * Get the Cartes_trucades that owns the Estats_expedients
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function estat_expedient()
    {
        return $this->belongsTo(Estat_expedients::class, 'estat_expedients_id');
    }
    public function cartes_trucades() {
        return $this->hasMany(Cartes_trucades::class, 'expedients_id');
    }


}
