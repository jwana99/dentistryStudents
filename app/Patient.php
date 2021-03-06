<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
