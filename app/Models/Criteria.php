<?php

namespace App\Models;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $guarded = [];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function datasets()
    {
        return $this->belongsToMany(Dataset::class);
    }

    public function results()
    {
        return $this->belongsToMany(Result::class);
    }
}
