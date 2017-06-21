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
                    'name' => "workout1",
                    'created_by' => 1,
                    'schedule' => "135",
                    'sport_id' => 1,
                    'active' => 1
                ],
                [
                    'name' => "workout Dois",
                    'created_by' => 1,
                    'schedule' => "12356",
                    'sport_id' => 1,
                    'active' => 1
                ],
                [
                    'name' => "Terceiro workout",
                    'created_by' => 1,
                    'schedule' => "1345",
                    'sport_id' => 1,
                    'active' => 0
                ],
                [
                    'name' => "4º workout",
                    'created_by' => 1,
                    'schedule' => "0146",
                    'sport_id' => 1,
                    'active' => 0
                ]

            ]);
    }
}
