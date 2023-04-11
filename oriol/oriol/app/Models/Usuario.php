<?php

namespace App\Models;


use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuaris'; #tabla de usuarios en BD
    public $timestamps = false;
    /**
     * Get the rol that owns the Usuario
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'roles_id'); #BD
    }
}
