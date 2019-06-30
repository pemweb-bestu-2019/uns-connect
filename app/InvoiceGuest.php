<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceGuest extends Model
{
    /**
     * Primary key dari model
     *
     * @var array
     */
    protected $primaryKey = 'id_invoice_guest';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'name', 'gender', 'birth_place', 'birth_date', 'religion', 'phone_number', 'address', 'city', 'province'
    ];

    public function invoice()
    {
        return $this->morphOne(Invoice::class, 'invoiceable');
    }
}
