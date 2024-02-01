<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrocinio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_patrocinador',
        'imagem',
    ];
}
