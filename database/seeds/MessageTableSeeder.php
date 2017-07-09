<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minutes = -999;

        App\Message::create([
            'from' => 2,
            'to' => 1,
            'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
            'body' => 'Oi, tudo bem?',
            'created_at' => Carbon::now()->addMinutes(++$minutes),
            'updated_at' => Carbon::now()->addMinutes($minutes),
        ]);

        App\Message::create([
            'from' => 1,
            'to' => 2,
            'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
            'body' => 'Tudo jóia! Não se esqueça de alongar antes e depois dos exercícios hein!',
            'created_at' => Carbon::now()->addMinutes(++$minutes),
            'updated_at' => Carbon::now()->addMinutes($minutes),
        ]);

        App\Message::create([
            'from' => 2,
            'to' => 1,
            'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
            'body' => 'Pode deixar!',
            'created_at' => Carbon::now()->addMinutes(++$minutes),
            'updated_at' => Carbon::now()->addMinutes($minutes),
        ]);

        App\Message::create([
            'from' => 1,
            'to' => 2,
            'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
            'body' => 'Bom treino ;)',
            'created_at' => Carbon::now()->addMinutes(++$minutes),
            'updated_at' => Carbon::now()->addMinutes($minutes),
        ]);

        App\Message::create([
            'from' => 2,
            'to' => 1,
            'body' => 'Obrigada!',
            'created_at' => Carbon::now()->addMinutes(++$minutes),
            'updated_at' => Carbon::now()->addMinutes($minutes),
        ]);

        $messages = [
            "I don't know what you did, Fry, but once again, you screwed up! Now all the planets are gonna start cracking wise about our mamas.",
            "No argument here.",
            "You don't know how to do any of those.",
            "Ah, yes! John Quincy Adding Machine. He struck a chord with the voters when he pledged not to go on a killing spree.",
            "OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can.",
            "And remember, don't do anything that affects anything, unless it turns out you were supposed to, in which case, for the love of God, don't not do it!",
        ];

        $users = App\User::all()->except(['id' => 2])->except(['id' => 1]);

        foreach (range(0,3) as $key => $value) {
            foreach ($users as $key => $user) {
                App\Message::create([
                    'from' => $user->id,
                    'to' => 1,
                    'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
                    'body' => $messages[0],
                    'created_at' => Carbon::now()->addMinutes(++$minutes),
                    'updated_at' => Carbon::now()->addMinutes($minutes),
                ]);

                App\Message::create([
                    'from' => 1,
                    'to' => $user->id,
                    'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
                    'body' => $messages[1],
                    'created_at' => Carbon::now()->addMinutes(++$minutes),
                    'updated_at' => Carbon::now()->addMinutes($minutes),
                ]);

                App\Message::create([
                    'from' => $user->id,
                    'to' => 1,
                    'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
                    'body' => $messages[2],
                    'created_at' => Carbon::now()->addMinutes(++$minutes),
                    'updated_at' => Carbon::now()->addMinutes($minutes),
                ]);

                App\Message::create([
                    'from' => 1,
                    'to' => $user->id,
                    'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
                    'body' => $messages[3],
                    'created_at' => Carbon::now()->addMinutes(++$minutes),
                    'updated_at' => Carbon::now()->addMinutes($minutes),
                ]);

                App\Message::create([
                    'from' => $user->id,
                    'to' => 1,
                    'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
                    'body' => $messages[4],
                    'created_at' => Carbon::now()->addMinutes(++$minutes),
                    'updated_at' => Carbon::now()->addMinutes($minutes),
                ]);

                App\Message::create([
                    'from' => 1,
                    'to' => $user->id,
                    'seen' => Carbon::now()->addMinutes(++$minutes + 2000),
                    'body' => $messages[5],
                    'created_at' => Carbon::now()->addMinutes(++$minutes),
                    'updated_at' => Carbon::now()->addMinutes($minutes),
                ]);
            }
        }

    }
}
