<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;

    protected $table = "doacoes";

    protected $fillable = [
        'quantidade',
        'tipo_pagamento',
        'nome',
        'data',
        'descricao',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
