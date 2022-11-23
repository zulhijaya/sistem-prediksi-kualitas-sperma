<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    protected $guarded = [];

    public function criterias()
    {
        return $this->belongsToMany(Criteria::class);
    }
}
