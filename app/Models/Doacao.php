<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\tipo_pagamento;

class Doacao extends Model
{
    use HasFactory;

    protected $table = "doacoes";

    protected $casts = [
        'tipo_pagamento' => tipo_pagamento::class,
    ];

    protected $fillable = [
        'quantidade',
        'tipo_pagamento',
        'nome',
        'data',
        'descricao',
        'email'
    ];


    public $timestamps=false;
     public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
