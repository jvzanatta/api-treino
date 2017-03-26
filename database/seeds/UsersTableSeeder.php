<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'first_name' => "João Victor",
                    'last_name' => "Zanatta",
                    'gender' => 'M',
                    'email' => "joaovictor15@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-07-31",
                    'weight' => 80.0,
                    'height' => 1.79,
                    'is_coach' => 1,
                    'facebook_id' => '10204869114888258'
                ],
                [
                    'first_name' => "Paulo",
                    'last_name' => "Pterson",
                    'gender' => 'M',
                    'email' => "teste1@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-05-22",
                    'weight' => 80.0,
                    'height' => 1.79,
                    'is_coach' => 1,
                    'facebook_id' => null
                ],
                [
                    'first_name' => "Anderson",
                    'last_name' => "Rockman",
                    'gender' => 'M',
                    'email' => "teste2@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-05-22",
                    'weight' => 75.0,
                    'height' => 1.69,
                    'is_coach' => 0,
                    'facebook_id' => null
                ],
                [
                    'first_name' => "Pedro",
                    'last_name' => "Pereira",
                    'gender' => 'M',
                    'email' => "teste3@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-05-22",
                    'weight' => 85.0,
                    'height' => 1.59,
                    'is_coach' => 0,
                    'facebook_id' => null
                ],
                [
                    'first_name' => "Juliana",
                    'last_name' => "Massoni",
                    'gender' => 'F',
                    'email' => "teste4@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-05-22",
                    'weight' => 75.0,
                    'height' => 1.72,
                    'is_coach' => 0,
                    'facebook_id' => null
                ],
                [
                    'first_name' => "Maria",
                    'last_name' => "Quem",
                    'gender' => 'F',
                    'email' => "teste5@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-05-22",
                    'weight' => 72.0,
                    'height' => 1.85,
                    'is_coach' => 1,
                    'facebook_id' => null
                ],
                [
                    'first_name' => "JuJu",
                    'last_name' => "Delicia",
                    'gender' => 'F',
                    'email' => "teste6@gmail.com",
                    'password' => '321654',
                    'birth_date' => "1990-05-22",
                    'weight' => 55.0,
                    'height' => 1.64,
                    'is_coach' => 0,
                    'facebook_id' => null
                ]
            ]);
    }
}
