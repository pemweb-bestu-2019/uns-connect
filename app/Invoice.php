<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_event'
    ];

    public function invoiceable()
    {
        return $this->morphTo();
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'id_event');
    }
}
