<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsorship extends Model
{
    protected $fillabe = ["name","price","duration"];
    public function apartments(){
        return $this->belongsToMany (apartment::class);
    }
    use HasFactory;
}
