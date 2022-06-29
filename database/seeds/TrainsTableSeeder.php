<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $train_types = [
            "Frecciarossa",
            "Frecciargento",
            "Frecciabianca",
        ];

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->agency = $faker->word();
            $train->departure_station = $faker->state();
            $train->arrival_station = $faker->state();
            $train->departure_time = '2022-06-'.rand(28,29).' '.rand(1,12).'-'.rand(0,30);
            $train->arrival_time = '2022-06-'.rand(29,30).' '.rand(13,23).'-'.rand(0,30);
            $train->train_code = rand(1000,10000);
            $train->carriages_number = rand(1,10);
            $train->on_time = rand(0,1);
            $train->deleted = rand(0,1);
            $train->train_type = $train_types[rand(0, count($train_types) - 1)];

            $train->save();
        }
    }
}
