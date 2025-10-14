<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
