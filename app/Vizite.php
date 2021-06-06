<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vizite extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('vizite.show', $this);
    }
    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class,'poliklinikID');
    }
    public function hasta()
    {
        return $this->belongsTo(Hasta::class,'hastaID');
    }
    public function oncelik()
    {
        return $this->belongsTo(Oncelik::class,'oncelikID');
    }
}
