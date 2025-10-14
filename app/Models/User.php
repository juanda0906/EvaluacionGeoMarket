<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function roles()
    {
        return $this->belongsTo(Rol::class);
    }
    public function sellers()
    {
        return $this->hasMany(Seller::class);
    
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    
    }
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    
    }
    public function chats_supports()
    {
        return $this->hasMany(chatSupport::class);
    
    }
}
