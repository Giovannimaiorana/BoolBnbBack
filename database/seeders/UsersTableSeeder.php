<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator as Faker; 


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++){
            $new_user= new User();
            $new_user -> name = $faker-> firstName();
            $new_user -> last_name = $faker-> firstName();
            $new_user -> email = $faker-> email();
            $new_user -> password = $faker-> password();
            $new_user -> birth_date = $faker->dateTime();
            $new_user->save();
        }
        
    }
}
