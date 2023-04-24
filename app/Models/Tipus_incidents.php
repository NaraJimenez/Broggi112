<?php

namespace App\Models;

//use App\Models\Incidents;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipus_incidents extends Model
{
    use HasFactory;

    public $table = 'tipus_incidents';
    public $primaryKey = 'id'; //Por defecto es id
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;

    /**
     * Get the Incidents that owns the Tipus_incidents
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function Incidents() //: hasMany
    {
        return $this->hasMany(Incidents::class, 'tipus_incidents_id');

    }
}
