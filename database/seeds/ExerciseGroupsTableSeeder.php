<?php

use Illuminate\Database\Seeder;

class ExerciseGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ExerciseGroup::create([
            'name' => "Outros",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Peito",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Costas",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Bíceps",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Tríceps",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Abdominais",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Panturrilha",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Antebraços",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Pernas",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Ombros",
            'sport_id' => 1
        ]);
        App\ExerciseGroup::create([
            'name' => "Carboidratos",
            'sport_id' => 5
        ]);
        App\ExerciseGroup::create([
            'name' => "Verduras e legumes",
            'sport_id' => 5
        ]);
        App\ExerciseGroup::create([
            'name' => "Frutas",
            'sport_id' => 5
        ]);
        App\ExerciseGroup::create([
            'name' => "Proteínas",
            'sport_id' => 5
        ]);
        App\ExerciseGroup::create([
            'name' => "Laticínios",
            'sport_id' => 5
        ]);

        // App\ExerciseGroup::create([
        //     'name' => "07h",
        //     'sport_id' => 5
        // ]);
        // App\ExerciseGroup::create([
        //     'name' => "10h",
        //     'sport_id' => 5
        // ]);
        // App\ExerciseGroup::create([
        //     'name' => "13h",
        //     'sport_id' => 5
        // ]);
        // App\ExerciseGroup::create([
        //     'name' => "16h",
        //     'sport_id' => 5
        // ]);
        // App\ExerciseGroup::create([
        //     'name' => "19h",
        //     'sport_id' => 5
        // ]);
        // App\ExerciseGroup::create([
        //     'name' => "22h",
        //     'sport_id' => 5
        // ]);


        App\ExerciseGroup::create([
            'name' => "Costas",
            'sport_id' => 4
        ]);
        App\ExerciseGroup::create([
            'name' => "Pernas",
            'sport_id' => 4
        ]);
        App\ExerciseGroup::create([
            'name' => "Braços",
            'sport_id' => 4
        ]);
        App\ExerciseGroup::create([
            'name' => "Ombros",
            'sport_id' => 4
        ]);
        App\ExerciseGroup::create([
            'name' => "Joelhos",
            'sport_id' => 4
        ]);
        App\ExerciseGroup::create([
            'name' => "Com bola",
            'sport_id' => 4
        ]);



        App\ExerciseGroup::create([
            'name' => "Bruços",
            'sport_id' => 2
        ]);
        App\ExerciseGroup::create([
            'name' => "Costas",
            'sport_id' => 2
        ]);
        App\ExerciseGroup::create([
            'name' => "Crawl",
            'sport_id' => 2
        ]);
        App\ExerciseGroup::create([
            'name' => "Mariposa",
            'sport_id' => 2
        ]);



        App\ExerciseGroup::create([
            'name' => "3000m",
            'sport_id' => 3
        ]);
        App\ExerciseGroup::create([
            'name' => "2000m",
            'sport_id' => 3
        ]);
        App\ExerciseGroup::create([
            'name' => "1000m",
            'sport_id' => 3
        ]);
        App\ExerciseGroup::create([
            'name' => "500m",
            'sport_id' => 3
        ]);
        App\ExerciseGroup::create([
            'name' => "300m",
            'sport_id' => 3
        ]);

    }
}
