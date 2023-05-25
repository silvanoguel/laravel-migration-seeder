<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i<50; $i++) {

            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->date = $faker->dateTimeBetween('-1 day', '+1 week');
            $train->departure = $faker->date();
            $train->arrival = $faker->date();
            $train->train_id = $faker->bothify('??-#########');
            $train->num_carriages = $faker->randomDigit();
            $train->on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->save();

        }
    }
}
