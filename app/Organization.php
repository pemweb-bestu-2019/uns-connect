<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_short', 'description', 'address', 'phone_number', 'website', 'registration_fee', 'registration_open'
    ];

    /**
     * Relasi bahwa sebuah organisasi bisa memiliki
     * banyak events
     *
     * @return void
     */
    public function events()
    {
        return $this->hasMany(Event::class, 'id_organization');
    }
}
