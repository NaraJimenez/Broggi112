<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\Provincies;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\hasMany;


class Comarques extends Model
{
    use HasFactory;

    public $table = 'comarques';
    public $primaryKey = 'id'; //Por defecto es id
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;

    /**
     * Get the Provincies that owns the Comarques
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Provincies() //: BelongsTo
    {
        return $this->belongsTo(Provincies::class, 'provincies_id');

    }

    /**
     * Get all of the Municipis for the Provincies
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function Municipis() //: hasMany
    {
        return $this->hasMany(Municipis::class, 'comarques_id');

    }
}
