<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Primary key dari model
     *
     * @var array
     */
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * Relasi sebuah user memiliki data member yaitu
     * informasi seperti nik dan lain sebagainya
     *
     * @return void
     */
    public function member()
    {
        return $this->hasOne(Member::class, 'id_user');
    }

    public function isAdmin()
    {
        return $this->username === 'moerbayaksa';
    }
}
