<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserCoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coach = App\User::find(1);

        foreach (App\User::all() as $user) {
            if ($user->id != 1) {
                if (in_array($user->id, [2,3,4,5,6])) {
                    $coach->pupils()->attach([$user->id => ['created_at' => Carbon::now()]]);
                } else if (substr($user->email, 0, 5) != "teste") {
                    $coach->coaches()->attach([$user->id => ['created_at' => Carbon::now()]]);
                }
            }
        }
    }
}
