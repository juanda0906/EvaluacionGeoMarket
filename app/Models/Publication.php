<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    
    }
}

