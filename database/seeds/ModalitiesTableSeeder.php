<?php

use Illuminate\Database\Seeder;

class ModalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalities')->insert([
            [
                'name' => "Musculação",
                'measure' => 'kg',
                'unit' => 'weight'
            ],
            [
                'name' => "Natação",
                'measure' => 'metros',
                'unit' => 'length'
            ],
            [
                'name' => "Corrida",
                'measure' => 'km',
                'unit' => 'length'
            ]
        ]);
    }
}
