<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    /**
     * Primary key dari model
     *
     * @var array
     */
    protected $primaryKey = 'id_division';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'level'
    ];
}
