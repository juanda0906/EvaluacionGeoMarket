<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function publications()
    {
        return $this->hasMany(Publication::class);
    
    }
}
