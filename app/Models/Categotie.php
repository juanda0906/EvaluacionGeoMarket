<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categotie extends Model
{
    public function publications()
    {
        return $this->hasMany(Publication::class);
    
}
}
