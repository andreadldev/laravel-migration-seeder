<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 4; $i++) {
            $list = ['Milano','Roma','Venezia','Genova','Torino','Bergamo'];
            shuffle($list);
            $departure_date= $faker->dateTimeBetween('-1 day', '+1 day');

            $new_train = new Train();
            $new_train->company = 'Trenitalia';
            $new_train->train_number = $faker->numberBetween(40000, 55000);
            $new_train->number_of_carriages = $faker->randomDigitNotNull();
            $new_train->from = array_shift($list);
            $new_train->to = array_shift($list);
            $new_train->departure = $departure_date;
            $new_train->arrival = date('Y-m-d H:i:s',strtotime('+2 hour',strtotime($departure_date->format('Y-m-d H:i:s'))));
            $new_train->platform = rand(1,4);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}
