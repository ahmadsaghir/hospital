<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unvan extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('unvan.show', $this);
    }
    public function doktor()
    {
        return $this->hasOne(Doktor::class,'unvanID');
    }
}
