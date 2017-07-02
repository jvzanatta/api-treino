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
                if ($user->email == 'xuxu@gmail.com') {
                    $coach->pupils()->attach([$user->id => ['created_at' => Carbon::now()]]);
                } else if (substr($user->email, 0, 5) != "teste") {
                    $coach->coaches()->attach([$user->id => ['created_at' => Carbon::now()]]);
                }
            }
        }
    }
}
