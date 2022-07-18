<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class two extends Model
{
    protected $fillable = [
        'name', 'salary', 'experience', 'one_id'
    ];

    public function one()
    {
        return $this->belongsTo(One::class);
    }

}
