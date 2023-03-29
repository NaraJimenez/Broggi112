<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Municipis;
use App\Models\Cartes_trucades_has_agencies;

class Agencies extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The Cartes_trucades_has_agencies that belong to the Agencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades_has_agencies(): hasMany
    {
        return $this->hasMany(Cartes_trucades_has_agencies::class, 'agencies_id');
    }

    /**
     * Get the Municipis that owns the Agencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipi(): BelongsTo
    {
        return $this->belongsTo(Municipis::class, 'municipis_id');
    }
}
