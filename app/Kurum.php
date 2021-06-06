<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurum extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('kurum.show', $this);
    }
    public function hasta()
    {
        return $this->hasOne(Hasta::class,'kurumID');
    }
}
