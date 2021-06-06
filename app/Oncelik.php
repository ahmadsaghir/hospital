<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oncelik extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('oncelik.show', $this);
    }
    public function vizite()
    {
        return $this->hasMany(Oncelik::class,'oncelikID');
    }
}
