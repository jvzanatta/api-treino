<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'first_name' => "João Victor",
            'last_name' => "Zanatta",
            'gender' => 'M',
            'email' => "joaovictor15@gmail.com",
            'picture' => 'https://scontent.xx.fbcdn.net/v/t1.0-1/p100x100/14724444_10205471148738728_3887865470549794964_n.jpg?oh=d6695634649700cac257abf8c2a06f78&oe=59C638F7',
            'password' => Hash::make('321654'),
            'birth_date' => "1990-07-31",
            'weight' => 80.0,
            'height' => 1.79,
            'is_coach' => 1,
            'facebook_id' => '10204869114888258',
            'facebook_link' => 'https://www.facebook.com/app_scoped_user_id/10200911625113487/',
        ]);
        App\User::create([
            'first_name' => "Juliana",
            'last_name' => "Massoni",
            'gender' => 'F',
            'email' => "xuxu@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1988-05-28",
            'weight' => 75.0,
            'height' => 1.72,
            'is_coach' => 0,
            'facebook_id' => null
        ]);

        App\User::create([
            'first_name' => "Arthur",
            'last_name' => "Martins",
            'gender' => 'M',
            'email' => "teste1@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 80.0,
            'height' => 1.79,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Gustavo",
            'last_name' => "Avellar",
            'gender' => 'M',
            'email' => "teste2@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.69,
            'is_coach' => 0,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Fabrício",
            'last_name' => "Batista",
            'gender' => 'M',
            'email' => "teste3@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 85.0,
            'height' => 1.59,
            'is_coach' => 0,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Gabriel",
            'last_name' => "Toneti",
            'gender' => 'F',
            'email' => "teste5@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 72.0,
            'height' => 1.85,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Fisioterapia",
            'last_name' => "Fisioterapia",
            'gender' => 'F',
            'email' => "fisio@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 72.0,
            'height' => 1.85,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Personal",
            'last_name' => "Personal",
            'gender' => 'F',
            'email' => "personal@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 72.0,
            'height' => 1.85,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Treinador",
            'last_name' => "Treinador",
            'gender' => 'F',
            'email' => "treinador@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 72.0,
            'height' => 1.85,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Nutricionista",
            'last_name' => "Nutricionista",
            'gender' => 'F',
            'email' => "nutri@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 72.0,
            'height' => 1.85,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
    }
}
