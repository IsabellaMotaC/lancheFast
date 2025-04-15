<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha'
    ];

    protected $hidden = ['senha'];
}
