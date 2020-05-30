<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Student extends Authenticatable
{
    use Notifiable ;

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected function redirectTo($request)
    {
        return route('welcome');
    }
    protected $guard = 'student';

    protected $guarded = [];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = hash::make($value);
    }

    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isUser() {
        return $this->role === 'user';
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}




