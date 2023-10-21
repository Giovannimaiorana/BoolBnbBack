<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{ 
    protected $fillabe = ["name","rooms","beds","bathrooms","mq","address","lat","lon","photo","visible","user_id"];
    
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
    public function services(){

        return $this->belongsToMany(Service::class);
        
    }
    
    use HasFactory;
}
