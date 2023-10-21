<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;
use Faker\Generator as Faker; 

class ApartmentsTableSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++){
            $new_apartment= new Apartment();
            $new_apartment -> name = $faker-> word(3);
            $new_apartment -> rooms = $faker-> numberBetween(1,200);
            $new_apartment -> beds = $faker-> numberBetween(1,4);
            $new_apartment -> bathrooms = $faker-> numberBetween(1,2);
            $new_apartment -> mq = $faker-> numberBetween(10,300);
            $new_apartment -> address = $faker-> word(3);
            $new_apartment -> lat = $faker-> randomFloat(8,1,999);
            $new_apartment -> lon = $faker-> randomFloat(8,1,999);
            $new_apartment -> photo = $faker-> imageUrl(400,250,'rooms');
            $new_apartment -> visible = $faker->numberBetween(0,1) ;
            $new_apartment -> user_id = 1;
            $new_apartment->save();
        }
        
    }
}
