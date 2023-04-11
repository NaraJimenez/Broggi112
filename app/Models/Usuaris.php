<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuaris extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuaris';
    public $timestamps = false;
}
