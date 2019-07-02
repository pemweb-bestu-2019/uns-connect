<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceUser extends Model
{
    /**
     * Primary key dari model
     *
     * @var array
     */
    protected $primaryKey = 'id_invoice_user';

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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
