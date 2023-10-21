<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Generator as Faker; 


class ServicesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++){
           $new_service= new Service();
           $new_service -> name = $faker-> word(3);
           $new_service->save();
        }
        
    }
}
