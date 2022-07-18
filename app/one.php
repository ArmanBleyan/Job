<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class one extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function twos()
    {
        return $this->hasMany(Two::class,'one_id');
    }

}
