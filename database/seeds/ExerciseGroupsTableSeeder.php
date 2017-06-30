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
        DB::table('exercise_groups')->insert([
            [
                'name' => "Outros",
                'sport_id' => 1
            ],
            [
                'name' => "Peito",
                'sport_id' => 1
            ],
            [
                'name' => "Costas",
                'sport_id' => 1
            ],
            [
                'name' => "Bíceps",
                'sport_id' => 1
            ],
            [
                'name' => "Tríceps",
                'sport_id' => 1
            ],
            [
                'name' => "Abdominais",
                'sport_id' => 1
            ],
            [
                'name' => "Panturrilha",
                'sport_id' => 1
            ],
            [
                'name' => "Antebraços",
                'sport_id' => 1
            ],
            [
                'name' => "Pernas",
                'sport_id' => 1
            ],
            [
                'name' => "Ombros",
                'sport_id' => 1
            ],
            [
                'name' => "Carboidratos",
                'sport_id' => 5
            ],
            [
                'name' => "Verduras e legumes",
                'sport_id' => 5
            ],
            [
                'name' => "Frutas",
                'sport_id' => 5
            ],
            [
                'name' => "Proteínas",
                'sport_id' => 5
            ],
            [
                'name' => "Laticínios",
                'sport_id' => 5
            ],
            [
                'name' => "07h",
                'sport_id' => 5
            ],
            [
                'name' => "10h",
                'sport_id' => 5
            ],
            [
                'name' => "13h",
                'sport_id' => 5
            ],
            [
                'name' => "16h",
                'sport_id' => 5
            ],
            [
                'name' => "19h",
                'sport_id' => 5
            ],
            [
                'name' => "22h",
                'sport_id' => 5
            ],
            [
                'name' => "Costas",
                'sport_id' => 4
            ],
            [
                'name' => "Pernas",
                'sport_id' => 4
            ],
            [
                'name' => "Braços",
                'sport_id' => 4
            ],
            [
                'name' => "Ombros",
                'sport_id' => 4
            ],
            [
                'name' => "Joelhos",
                'sport_id' => 4
            ],
            [
                'name' => "Com bola",
                'sport_id' => 4
            ]
        ]);
    }
}
