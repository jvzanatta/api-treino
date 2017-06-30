<?php

use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->insert([
            [
                'name' => "Musculação",
                'measure' => 'kg',
                'unit' => 'weight',
            ],
            [
                'name' => "Natação",
                'measure' => 'metros',
                'unit' => 'length',
            ],
            [
                'name' => "Corrida",
                'measure' => 'km',
                'unit' => 'length',
            ],
            [
                'name' => "Fisioterapia",
                'measure' => 'seg',
                'unit' => 'time',
            ],
            [
                'name' => "Nutricionismo",
                'measure' => null,
                'unit' => null,
            ]
        ]);
    }
}
