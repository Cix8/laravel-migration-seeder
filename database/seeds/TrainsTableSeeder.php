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
            "InterCity",
            "Regionale",
            "Suburbano"
        ];

        $departure_stations = [
            "Roma Termini",
            "Bologna Centrale",
            "Napoli Centrale",
            "Milano Centrale",
            "Roma Tiburtina",
            "Torino Porta Nuova",
            "Firenze Santa Maria Novella",
            "Venezia Santa Lucia"
        ];

        $arrival_stations = [
            "Napoli Afragola",
            "Torino Porta Nuova",
            "Genova Brignole",
            "Palermo Centrale",
            "Reggio Emilia AV Mediopadana"
        ];

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->agency = $faker->word();
            $train->departure_station = $departure_stations[rand(0, count($departure_stations) - 1)];
            $train->arrival_station = $arrival_stations[rand(0, count($arrival_stations) - 1)];
            $train->departure_time = '2022-06-'.rand(28,29).' '.rand(1,12).'-'.rand(0,30);
            $train->arrival_time = '2022-06-'.rand(29,30).' '.rand(13,23).'-'.rand(0,30);
            $train->train_code = rand(1000,10000);
            $train->carriages_number = rand(1,10);
            $train->on_time = rand(0,1);
            $train->deleted = rand(0,1);
            $train->train_type = rand(0, count($train_types) - 1);

            $train->save();
        }
    }
}
