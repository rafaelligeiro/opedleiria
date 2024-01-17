<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'categoria',
        'descricao',
        'data',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'id_func');
    }
}

