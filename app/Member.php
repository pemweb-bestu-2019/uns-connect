<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'name', 'gender', 'birth_place', 'birth_date', 'religion', 'phone_number', 'address', 'city', 'province'
    ];
}
