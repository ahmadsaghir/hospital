<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasta extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('hasta.show', $this);
    }
    public function vizite()
    {
        return $this->hasMany(Hasta::class,'hastaID');
    }
    public function kurum()
    {
        return $this->belongsTo(Kurum::class,'kurumID');
    }
    public function hastaTipi()
    {
        return $this->belongsTo(HastaTipi::class,'hastaTipiID');
    }
}
