<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interlocutors extends Model
{
    use HasFactory;

    public $table = 'interlocutors';
    public $primaryKey = 'id'; //Por defecto es id
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;


    /**
     * Get all of the Cartes_trucades for the Interlocutors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Cartes_trucades()//: HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'interlocutors_id');
    }

    
}
