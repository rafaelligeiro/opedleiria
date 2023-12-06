<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;

    protected $table = "inscricoes";

    protected $fillable = [
        'nome',
        'telefone',
        'quantidade',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_utilizador');
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }
}

