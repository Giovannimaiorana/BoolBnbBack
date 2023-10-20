<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function users(){
        return $this->hasMany (User::class);
    }
    public function sponsorships(){
        return $this->belongsToMany(sponsorship::class);
    }
    
    use HasFactory;
}
