<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

         /* $table->string('company', 20);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->dateTimeTz('departure_time'); 
            $table->dateTimeTz('arrival_time');
            $table->string('train_code', 10);
            $table->unsignedTinyInteger('num_carriages');
            $table->boolean('in_time')->default(1);
            $table->boolean('cancelled')->default(0); */



class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 70; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia', 'FerrovieAppuloLucane', 'Italo', 'Intercity', 'Freccia Rossa']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeInInterval('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval('-1 week', '+1 week');
            $newTrain->train_code = $faker->lexify('????????');
            $newTrain->num_carriages = $faker->numberBetween(2, 50);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
