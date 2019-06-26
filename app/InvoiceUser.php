<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceUser extends Model
{
    public function invoice()
    {
        return $this->morphOne(Invoice::class, 'invoiceable');
    }
}
