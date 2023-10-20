<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function sponsorships(){
        return $this->belongsToMany(sponsorship::class);
    }
    
    use HasFactory;
}
