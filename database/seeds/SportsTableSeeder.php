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
        App\Sport::create([
            'name' => "Musculação",
            'measure' => 'kg',
            'unit' => 'weight',
        ]);
        App\Sport::create([
            'name' => "Natação",
            'measure' => 'metros',
            'unit' => 'length',
        ]);
        App\Sport::create([
            'name' => "Corrida",
            'measure' => 'km',
            'unit' => 'length',
        ]);
        App\Sport::create([
            'name' => "Fisioterapia",
            'measure' => 'seg',
            'unit' => 'time',
        ]);
        App\Sport::create([
            'name' => "Nutrição",
            'measure' => null,
            'unit' => null,
        ]);
    }
}
