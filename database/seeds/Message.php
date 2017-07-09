<?php

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Message::create([
            'from' => 1,
            'to' => 2,
            'body' => 'Oi',
        ]);
        sleep(1);
        App\Message::create([
            'from' => 2,
            'to' => 1,
            'body' => 'Oi, td bem?',
        ]);
        sleep(1);
        App\Message::create([
            'from' => 1,
            'to' => 2,
            'body' => 'Tudo jóia! Não se esqueça de alongar!',
        ]);
        sleep(1);
        App\Message::create([
            'from' => 2,
            'to' => 1,
            'body' => 'Pode deixar!',
        ]);
        sleep(1);
        App\Message::create([
            'from' => 1,
            'to' => 2,
            'body' => 'Bom treino!',
        ]);
        sleep(1);

    }
}
