<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
