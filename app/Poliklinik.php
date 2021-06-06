<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('poliklinik.show', $this);
    }
    public function doktor()
    {
        return $this->belongsTo(Doktor::class,'doktorID');
    }
    public function randevu()
    {
        return $this->hasMany(Poliklinik::class,'poliklinikID');
    }
    public function vizite()
    {
        return $this->hasMany(Poliklinik::class,'poliklinikID');
    }
}
