<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* importare Train */
use App\Models\Train;

/* importare Faker */
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /* dare come argomento Faker $faker */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->azienda = $faker->name();
            $train->stazione_di_partenza = $faker->name();
            $train->stazione_di_arrivo = $faker->name();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(0, 100);;
            $train->numero_carrozze = $faker->numberBetween(0, 100);;
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_di_partenza = $faker->dateTime();

            /* salvare i dati nel database*/
            $train->save();
        }
    }
}
