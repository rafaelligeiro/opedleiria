<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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

	/*CRIAR MÉTODO SIMILAR PARA TODOS OS RELACIONAMENTOS COM A TABELA DOS USERS
	public function projects()
    {
        return $this->hasMany(Project::class);
        //Quando as chaves não seguem as convenções
        //return $this->hasMany(Project::class,'user_id','id');
    }
	*/

}
