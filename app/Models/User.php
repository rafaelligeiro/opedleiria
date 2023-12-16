<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    //Tem a coluna deleted_at
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'morada',
        'nif',
        'telefone',
        'data_nasc',
        'genero',
        'cod_postal'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

	public function roleToStr()
    {
        switch ($this->role) {
            case 'M':
                return 'Membro';
            case 'A':
                return 'Admin';
            case 'F':
                return 'Funcionário';
        }
    }
    public function isAdmin()
    {
        return $this->role == 'A';
    }

	public function doacoes()
    {
        return $this->hasMany(Doacao::class, 'id_doacao');
    }

}
