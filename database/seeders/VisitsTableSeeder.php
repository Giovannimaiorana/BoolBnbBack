<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visit;
use Faker\Generator as Faker; 

class VisitsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++){
            $new_visit= new Visit();
            $new_visit -> ip = $faker-> word(3);
            $new_visit -> date = $faker->dateTime() ;
            $new_visit -> apartment_id = 2;
            $new_visit->save();
        }
        
    }
}
