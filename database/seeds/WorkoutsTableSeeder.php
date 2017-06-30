<?php

use Illuminate\Database\Seeder;

class WorkoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workouts')->insert([
                [
                    'name' => "Treino funcional 1",
                    'created_by' => 1,
                    'schedule' => "135",
                    'sport_id' => 1,
                    'active' => 1
                ],
                [
                    'name' => "Treino Aeróbico 2",
                    'created_by' => 1,
                    'schedule' => "12356",
                    'sport_id' => 1,
                    'active' => 1
                ],
                [
                    'name' => "Treino 3",
                    'created_by' => 1,
                    'schedule' => "1345",
                    'sport_id' => 1,
                    'active' => 0
                ],
                [
                    'name' => "Treino 4",
                    'created_by' => 1,
                    'schedule' => "0146",
                    'sport_id' => 1,
                    'active' => 0
                ],
                [
                    'name' => "Dieta 5",
                    'created_by' => 1,
                    'schedule' => "0123456",
                    'sport_id' => 5,
                    'active' => 1
                ],
                [
                    'name' => "Dieta 6",
                    'created_by' => 10,
                    'schedule' => "0123456",
                    'sport_id' => 5,
                    'active' => 1
                ]

            ]);
    }
}
