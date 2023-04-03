<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;


use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) 
    {
        for($i=0; $i < 100; $i++){
            $new_train = new Train;
          
        $new_train->company = $faker ->randomElement(['italo', 'frecciarossa', 'regionale', 'intercity', 'frecciargento']);
        $new_train->train_code = $faker ->unique()-> ean8();
        $new_train->departure_station = $faker -> city();
        $new_train->departure_time = $faker ->time('H:i') ;
        $new_train->arrival_station = $faker -> city();
        $new_train->arrival_time = $faker ->time('H:i');
        $new_train->car_number = $faker -> numberBetween(5, 10);
        $new_train->in_time = $faker ->boolean();
        $new_train->cancelled = $faker ->boolean();

        $new_train->save();
        }
        


    }
}