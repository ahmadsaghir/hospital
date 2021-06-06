<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HastaTipi extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('hastaTipi.show', $this);
    }
    public function hasta()
    {
        return $this->hasOne(Hasta::class,'hastaTipiID');
    }
}
