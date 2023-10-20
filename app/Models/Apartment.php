<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
<<<<<<< HEAD
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
=======
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
>>>>>>> f2b119575d1c046ce21ea1d48c7f98710bac8e83
    }
    public function sponsorships(){
        return $this->belongsToMany(sponsorship::class);
    }
    
    use HasFactory;
}
