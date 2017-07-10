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
            'phone' => '014981218838',
            'info' => 'Disponibilidade para os treinos: 2ª, 4ª, 5ª e Sáb',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'limitations' => 'Escoliose',
            'fat_percent' => 20.1,
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
            'limitations' => 'Problemas no ombro esquerdo',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'email' => "xuxu@gmail.com",
            'phone' => "014991939586",
            'password' => Hash::make('321654'),
            'birth_date' => "1988-05-28",
            'weight' => 51.0,
            'height' => 1.60,
            'is_coach' => 0,
            'facebook_id' => null
        ]);

        App\User::create([
            'first_name' => "Arthur",
            'last_name' => "Martins",
            'gender' => 'M',
            'email' => "teste1@gmail.com",
            'limitations' => 'Não passa sob algumas portas',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'fat_percent' => 20.1,
            'phone' => "014991939586",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.92,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Gustavo",
            'last_name' => "Avellar",
            'gender' => 'M',
            'email' => "teste2@gmail.com",
            'info' => 'Facilidade em perder goiabas',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'fat_percent' => 20.1,
            'phone' => "014991939586",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 0,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Fabrício",
            'last_name' => "Batista",
            'gender' => 'M',
            'email' => "teste3@gmail.com",
            'phone' => "014991939586",
            'info' => 'Pouca disponibilidade para atividades pela manhã',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'fat_percent' => 20.1,
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 0,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Gabriel",
            'last_name' => "Toneti",
            'gender' => 'F',
            'email' => "teste4@gmail.com",
            'phone' => "014991939586",
            'info' => 'Treino apenas 2x por semana',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'fat_percent' => 20.1,
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Fisioterapeuta",
            'last_name' => "Fisioterapeuta",
            'gender' => 'F',
            'info' => 'Profissional qualificado com mais de 5 anos de experiência no mercado',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'email' => "fisio@gmail.com",
            'phone' => "014991939586",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Personal",
            'last_name' => "Personal",
            'gender' => 'F',
            'info' => 'Profissional qualificado com mais de 5 anos de experiência no mercado',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'email' => "personal@gmail.com",
            'phone' => "014991939586",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Treinador",
            'last_name' => "Treinador",
            'gender' => 'F',
            'info' => 'Profissional qualificado com mais de 5 anos de experiência no mercado',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'phone' => "014991939586",
            'email' => "treinador@gmail.com",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
        App\User::create([
            'first_name' => "Nutricionista",
            'last_name' => "Nutricionista",
            'gender' => 'F',
            'info' => 'Profissional qualificado com mais de 5 anos de experiência no mercado',
            'goal' => 'Praticar exercícios para ter uma vida mais saudável.',
            'email' => "nutri@gmail.com",
            'phone' => "014991939586",
            'password' => Hash::make('321654'),
            'birth_date' => "1990-05-22",
            'weight' => 75.0,
            'height' => 1.75,
            'is_coach' => 1,
            'facebook_id' => null
        ]);
    }
}
