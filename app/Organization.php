<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     * Primary key dari model
     *
     * @var array
     */
    protected $primaryKey = 'id_organization';

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

    public function owner()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function memberships()
    {
        return $this->hasMany(Membership::class, 'id_organization');
    }

    public function membership_invoices()
    {
        return $this->hasMany(MembershipInvoice::class, 'id_organization');
    }
}
