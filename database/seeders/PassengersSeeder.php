<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PassengersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i<100;$i++){
        $passengers = new Passenger();
        $passengers->name = $faker->firstName();
        $passengers->surname = $faker->lastName();
        $passengers->email = $faker->email();
        $passengers->save();
        }
    }
}
