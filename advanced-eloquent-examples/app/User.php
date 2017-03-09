<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    protected $dates = [
        'created_at', 'updated_at', 'birthdate',
    ];

    protected $appends = ['name', 'age'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function getAgeAttribute()
    {
        return $this->birthdate->age;
    }

    public function setFirstNameAttribute($firstName)
    {
        $this->attributes['first_name'] = ucfirst(strtolower($firstName));
    }
}
