<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillabe = ["name"];
    public function apartments(){
        return $this->belongsToMany (apartment::class);
    }
    use HasFactory;
}
