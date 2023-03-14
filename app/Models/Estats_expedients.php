<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estats_expedients extends Model
{
    use HasFactory;

    protected $table = 'estats_expedients';

    // Id es la clave primaria default en Eloquent e incrementing es true por defecto.
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false; // updated_at && created_at
}
