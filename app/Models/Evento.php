<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'data',
        'num_participantes',
        'imagem',
    ];

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class, 'id_evento');
    }
}
