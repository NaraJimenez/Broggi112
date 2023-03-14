<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus_incidents extends Model
{
    use HasFactory;

    protected $table = 'tipus_incidents';

    // Id es la clave primaria default en Eloquent e incrementing es true por defecto.
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false; // updated_at && created_at
}
