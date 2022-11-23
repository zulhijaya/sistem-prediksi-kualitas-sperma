<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->hasOne(Question::class);
    }

    public function criterias() 
    {
        return $this->hasMany(Criteria::class);
    }

    // public function datasets()
    // {
    //     return $this->hasManyThrough(Dataset::class, Criteria::class);
    // }
}
