<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillabe = ["ip","date","apartment_id"];
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    use HasFactory;
}
