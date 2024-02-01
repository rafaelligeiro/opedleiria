<?php

namespace App\Models;

use App\Models\Patrocinio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patrocinio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_patrocinador',
        'imagem',
    ];
}
