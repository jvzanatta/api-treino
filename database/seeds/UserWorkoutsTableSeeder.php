<?php

use Illuminate\Database\Seeder;

class UserWorkoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_workouts')->insert([
            [
                'user_id' => 1,
                'workout_id' => 1
            ],
            [
                'user_id' => 3,
                'workout_id' => 2
            ],
            [
                'user_id' => 2,
                'workout_id' => 2
            ],
            [
                'user_id' => 4,
                'workout_id' => 3
            ],
            [
                'user_id' => 1,
                'workout_id' => 4
            ],
            [
                'user_id' => 1,
                'workout_id' => 7
            ],
            [
                'user_id' => 1,
                'workout_id' => 9
            ]
        ]);
    }
}
