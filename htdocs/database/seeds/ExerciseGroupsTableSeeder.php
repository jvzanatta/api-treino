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
                    'modality_id' => 1
                ],
                [
                    'name' => "Peito",
                    'modality_id' => 1
                ],
                [
                    'name' => "Costas",
                    'modality_id' => 1
                ],
                [
                    'name' => "Bíceps",
                    'modality_id' => 1
                ],
                [
                    'name' => "Tríceps",
                    'modality_id' => 1
                ],
                [
                    'name' => "Abdominais",
                    'modality_id' => 1
                ],
                [
                    'name' => "Panturrilha",
                    'modality_id' => 1
                ],
                [
                    'name' => "Antebraços",
                    'modality_id' => 1
                ],
                [
                    'name' => "Pernas",
                    'modality_id' => 1
                ],
                [
                    'name' => "Ombros",
                    'modality_id' => 1
                ]
            ]);
    }
}
