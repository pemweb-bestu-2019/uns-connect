<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user'
    ];
    
    public function invoice()
    {
        return $this->morphOne(Invoice::class, 'invoiceable');
    }
}
