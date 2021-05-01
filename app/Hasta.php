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
}
