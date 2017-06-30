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
        $users = App\User::where('id', '<>', 1)->get();

        foreach ($users->pluck('id')->toArray() as $id) {
            $coach->pupils()->attach([$id => ['created_at' => Carbon::now()]]);
        }
    }
}
