<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartes_trucades_has_agencies extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades_has_agencies';
    protected $primaryKey = ['cartes_trucades_id', 'agencies_id'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'cartes_trucades_id', 'agencies_id', 'estat_agencies_id'
    ];
     public function cartaTrucades()
     {
          return $this->belongsTo(cartes_trucades::class, 'cartes_trucades_id');
     }

      public function agencies()
      {
           return $this->belongsTo(agencies::class, 'agencies_id');
        }
       public function estatAgencies()
       {
            return $this->belongsTo(Estats_agencies::class, 'estat_agencies_id');
       }
}
