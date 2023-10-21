<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
use Faker\Generator as Faker; 

class MessagesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++){
           $new_message= new Message();
           $new_message -> name = $faker-> word(3);
           $new_message -> last_name = $faker-> word(3);
           $new_message -> email = $faker-> email();
           $new_message -> text = $faker-> word(20);
           $new_message -> apartment_id = 2;
           $new_message->save();
        }
        
    }
}
