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
                'created_by' => App\User::where('first_name', 'João Victor')->first()->id,
                'schedule' => "135",
                'sport_id' => 1,
                'active' => 1
            ],
            [
                'name' => "Treino Aeróbico 2",
                'created_by' => App\User::where('first_name', 'João Victor')->first()->id,
                'schedule' => "246",
                'sport_id' => 1,
                'active' => 0
            ],
            [
                'name' => "Treino 3",
                'created_by' => App\User::where('first_name', 'Personal')->first()->id,
                'schedule' => "1345",
                'sport_id' => 1,
                'active' => 1
            ],
            [
                'name' => "Treino 4",
                'created_by' => App\User::where('first_name', 'Personal')->first()->id,
                'schedule' => "1345",
                'sport_id' => 1,
                'active' => 0
            ],
            [
                'name' => "Treino 5",
                'created_by' => App\User::where('first_name', 'Personal')->first()->id,
                'schedule' => "1256",
                'sport_id' => 1,
                'active' => 0
            ],
            [
                'name' => "Dieta 6",
                'created_by' => App\User::where('first_name', 'João Victor')->first()->id,
                'schedule' => "0123456",
                'sport_id' => App\Sport::where('name', 'Nutricionismo')->first()->id,
                'active' => 1
            ],
            [
                'name' => "Dieta 7",
                'created_by' => App\User::where('first_name', 'Nutricionista')->first()->id,
                'schedule' => "0123456",
                'sport_id' => App\Sport::where('name', 'Nutricionismo')->first()->id,
                'active' => 1
            ],
            [
                'name' => "Fisio 8",
                'created_by' => App\User::where('first_name', 'João Victor')->first()->id,
                'schedule' => "135",
                'sport_id' => App\Sport::where('name', 'Fisioterapia')->first()->id,
                'active' => 1
            ],
            [
                'name' => "Fisio 9",
                'created_by' => App\User::where('first_name', 'Fisioterapeuta')->first()->id,
                'schedule' => "135",
                'sport_id' => App\Sport::where('name', 'Fisioterapia')->first()->id,
                'active' => 1
            ]
        ]);
    }
}
