<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Membership extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('date_expired', function (Builder $builder) {
            $builder->whereDate(
                'date_expired',
                '>=',
                Carbon::now()->format('Y-m-d')
            );
        });
    }
}
