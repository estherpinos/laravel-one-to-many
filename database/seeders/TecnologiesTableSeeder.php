<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnology;
use Faker\Generator as Faker;



class TecnologiesTableSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_tecnology = new Tecnology();
            $new_tecnology->title = $faker->sentence(4);
            $new_tecnology->save();
        }

    }
}
