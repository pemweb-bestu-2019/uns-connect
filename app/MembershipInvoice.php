<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipInvoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price', 'date', 'id_organization'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
