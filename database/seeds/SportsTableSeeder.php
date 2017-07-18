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
            'name' => "Academia", // 1
            'measure' => 'kg',
            'unit' => 'weight',
        ]);
        App\Sport::create([
            'name' => "Natação", // 2
            'measure' => 'metros',
            'unit' => 'length',
        ]);
        App\Sport::create([
            'name' => "Corrida", // 3
            'measure' => 'km',
            'unit' => 'length',
        ]);
        App\Sport::create([
            'name' => "Fisioterapia",
            'measure' => 'seg',
            'unit' => 'time',
        ]);
        App\Sport::create([
            'name' => "Nutrição", // 4
            'measure' => null,
            'unit' => null,
        ]);
        App\Sport::create([
            'name' => "Ginástica", // 5
            'measure' => null,
            'unit' => null,
        ]);
        // App\Sport::create([
        //     'name' => "Cardápio",
        //     'measure' => null,
        //     'unit' => null,
        // ]);
    }
}
