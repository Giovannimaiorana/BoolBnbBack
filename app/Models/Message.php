<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function apartments()
    {
        return $this->belongsTo(Apartment::class);
    }
    use HasFactory;
}