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
                ]
            ]);
    }
}
