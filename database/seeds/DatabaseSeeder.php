<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(ExerciseGroupsTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(WorkoutsTableSeeder::class);
        $this->call(WorkoutExercisesTableSeeder::class);
        $this->call(UserWorkoutsTableSeeder::class);
    }
}
