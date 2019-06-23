<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Primary key dari model
     *
     * @var array
     */
    protected $primaryKey = 'id_event';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'quota', 'date_eventday', 'date_register_close', 'lat', 'long', 'slug', 'is_private'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_eventday', 'date_register_close', 'created_at', 'updated_at'
    ];

    /**
     * Relasi sebuah event adalah
     * milik dari sebuah roganisasi
     *
     * @return void
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class, 'id_organization');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
