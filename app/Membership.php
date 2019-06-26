<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Membership extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_division', 'id_organization', 'date_expired'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_expired', 'created_at', 'updated_at'
    ];

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

    public function division()
    {
        return $this->belongsTo(Division::class, 'id_division');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'id_organization');
    }
}
