<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartes_trucades extends Model
{
    use HasFactory;
    //protected $fillable = ['expedients_id'];
    protected $table = 'cartes_trucades';
    protected $primaryKey = 'id';
    public $incrementing = true; //Por defecto es true
    public $timestamps = false;



    public function expedients()
    {
        return $this->belongsTo(Expedients::class, 'expedients_id');
    }

    public function interlocutor()
    {
        return $this->belongsTo(Interlocutors::class, 'interlocutors_id');
    }

    public function tipusLocalitzacio()
    {
        return $this->belongsTo(Tipus_localitzacions::class, 'tipus_localitzacions_id');
    }

    public function municipi()
    {
        return $this->belongsTo(Municipis::class, 'municipis_id');
    }

    public function provincia()
    {
        return $this->belongsTo(Provincies::class, 'provincies_id');
    }

    public function incident()
    {
        return $this->belongsTo(Incidents::class, 'incidents_id');
    }

    public function usuari()
    {
        return $this->belongsTo(Usuaris::class, 'usuaris_id');
    }

    public function cartes_trucades_has_agencies()
    {
        return $this->hasMany(Cartes_trucades_has_agencies::class, 'cartes_trucades_id');
    }
}
