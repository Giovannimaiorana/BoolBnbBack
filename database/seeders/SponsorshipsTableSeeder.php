<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sponsorship;
use Faker\Generator as Faker; 

class SponsorshipsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++){
            $new_sponsorship= new sponsorship();
            $new_sponsorship -> name = $faker-> word(3);
            $new_sponsorship -> price = $faker->randomFloat(2,0,9999);
            $new_sponsorship -> duration = $faker->time();
            $new_sponsorship->save();
        }
        
    }
}
