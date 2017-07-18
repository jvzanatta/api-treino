<?php

use Illuminate\Database\Seeder;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            [
                'name' => "Supino Reto",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Supino Inclinado",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Supino Plano",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Supino Inclinado com Halteres",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Cabo Crossover",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Flexões",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Flexões com Halteres",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Supino com Halteres",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Flexões Inclinadas",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Flexões em Barras Paralelas",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Crucifixo",
                'exercise_group_id' => 2
            ],
            [
                'name' => "Remada",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Barra Fixa",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Agachamentos",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Pulldowns dorsais",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Remada Sentada",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Puxada de Halteres com 1 Braço",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Encolhimento de Ombros",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Remada Unilateral",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Halteres Bent Over Row",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Bent Over Row na Barra-T",
                'exercise_group_id' => 3
            ],
            [
                'name' => "Rosca",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Rosca Direta",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Rosca Martelo",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Rosca Concentrada",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Rosca Inversa",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Rosca com Cabo",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Rosca com Cabo Polia Baixa",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Cabo Cruzado de Polia Baixa",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Elevação de Haltere - Pronação Martelo no Banco",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Elevação de Haltere - Pronação Martelo Levantado",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Elevação de Haltere - Pronação Inferior 1 Braço",
                'exercise_group_id' => 4
            ],
            [
                'name' => "Supino de Aperto Fechado",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Extensões de Tríceps",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Kickback de Tríceps",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Extensões de Tríceps 1 Braço com Halteres",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Extensões de Tríceps com Barra",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Dips",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Pull Over",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Flexão com Triângulo",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Flexão com Triângulo e Banco",
                'exercise_group_id' => 5
            ],
            [
                'name' => "Supino",
                'exercise_group_id' => 6
            ],
            [
                'name' => "Levantamento de Pernas",
                'exercise_group_id' => 6
            ],
            [
                'name' => "Abdominais Laterais com Haltere",
                'exercise_group_id' => 6
            ],
            [
                'name' => "Flexões",
                'exercise_group_id' => 6
            ],
            [
                'name' => "Supino com Bola",
                'exercise_group_id' => 6
            ],
            [
                'name' => "Elevação de pernas em Banco",
                'exercise_group_id' => 6
            ],
            [
                'name' => "Elevação na Ponta dos Pés",
                'exercise_group_id' => 7
            ],
            [
                'name' => "Elevação na Ponta dos Pés com 1 Perna",
                'exercise_group_id' => 7
            ],
            [
                'name' => "Elevação de Panturrilha Sentado",
                'exercise_group_id' => 7
            ],
            [
                'name' => "Elevação em Pé de Barra com Gêmeos",
                'exercise_group_id' => 7
            ],
            [
                'name' => "Salto de Haltere com Gêmeos",
                'exercise_group_id' => 7
            ],
            [
                'name' => "Girar Pulsos com Halteres",
                'exercise_group_id' => 8
            ],
            [
                'name' => "Girar Pulsos com Barra",
                'exercise_group_id' => 8
            ],
            [
                'name' => "Twist de Pulso com Halteres",
                'exercise_group_id' => 8
            ],
            [
                'name' => "Standing Wrist Curl",
                'exercise_group_id' => 8
            ],
            [
                'name' => "Agachamento",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Extensões de Pernas",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Alongamento com Halteres",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Elevação Frontal",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Power Squats",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Hack Squats",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Flexão de Pernas Sentado",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Agachamento com Barra",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Investida com Barra",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Agachamento Dividido Búlgaro",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Agachamento de Perna Singular",
                'exercise_group_id' => 9
            ],
            [
                'name' => "Remada Alta",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Desenvolvimento Sentado",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Desenvolvimento Frontal Sentado",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Elevação Lateral com Cabo",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Elevação Lateral com Halteres",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Elevação Frontal com Barra",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Prensa Arnold",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Elevação Frontal com Halteres",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Pressão de Ombros com Halteres",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Elevação Frontal com Cabo",
                'exercise_group_id' => 10
            ],
            [
                'name' => "Elevação Lateral Inclinada",
                'exercise_group_id' => 10
            ]
        ]);








        $runningId = App\Sport::where('name', 'Corrida')->first()->id;

        $runningArray = [
            '3000m',
            '2000m',
            '1000m',
            '500m',
            '300m',
        ];

        $runningExercises = [
            '1x forte',
            '1x fraco',
            '2x forte',
            '2x fraco',
            '3x forte',
            '3x fraco',
            '4x forte',
            '4x fraco',
            '5x forte',
            '5x fraco',
        ];


        $groupId = App\ExerciseGroup::where([['name', $runningArray[0]], ['sport_id', $runningId]])->first()->id;
        App\Exercise::create(['name' => $runningExercises[0], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[1], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[2], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[3], 'exercise_group_id' => $groupId]);


        $groupId = App\ExerciseGroup::where([['name', $runningArray[1]], ['sport_id', $runningId]])->first()->id;
        App\Exercise::create(['name' => $runningExercises[0], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[1], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[2], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[3], 'exercise_group_id' => $groupId]);


        $groupId = App\ExerciseGroup::where([['name', $runningArray[2]], ['sport_id', $runningId]])->first()->id;
        App\Exercise::create(['name' => $runningExercises[2], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[3], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[4], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[5], 'exercise_group_id' => $groupId]);


        $groupId = App\ExerciseGroup::where([['name', $runningArray[3]], ['sport_id', $runningId]])->first()->id;
        App\Exercise::create(['name' => $runningExercises[6], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[7], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[8], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[9], 'exercise_group_id' => $groupId]);


        $groupId = App\ExerciseGroup::where([['name', $runningArray[4]], ['sport_id', $runningId]])->first()->id;
        App\Exercise::create(['name' => $runningExercises[6], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[7], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[8], 'exercise_group_id' => $groupId]);
        App\Exercise::create(['name' => $runningExercises[9], 'exercise_group_id' => $groupId]);










        $swimmingId = App\Sport::where('name', 'Natação')->first()->id;

        $swimmingArray = [
            'Bruços',
            'Costas',
            'Crawl',
            'Mariposa',
        ];

        $swimmingExercises = [
            '50m forte',
            '100m forte',
            '200m forte',
            '500m forte',
            '1000m forte',
            '2000m forte',
            '50m fraco',
            '100m fraco',
            '200m fraco',
            '500m fraco',
            '1000m fraco',
            '2000m fraco',
        ];

        foreach ($swimmingArray as $groupName) {
            $groupId = App\ExerciseGroup::where([['name', $groupName], ['sport_id', $swimmingId]])->first()->id;
            foreach ($swimmingExercises as $exercise) {
                App\Exercise::create(['name' => $exercise, 'exercise_group_id' => $groupId]);
            }
        }





        $nutritionId = App\Sport::where('name', 'Nutrição')->first()->id;

        $nutritionTypeArray = [
            'Carboidratos' => ['Pães',
                'Massas',
                'Arroz',
                'Batata',
                'Cereais'
            ],

            'Verduras e legumes' => ['Folhagens',
                'Cenoura',
                'Abóbora',
                'Beterraba'
            ],

            'Frutas' => ['Laranja',
                'Limão',
                'Acerola',
                'Melão',
                'Uva',
                'Abacaxi',
                'Manga',
                'Kiwi',
                'Mamão'
            ],

            'Proteínas' => ['Ovos',
                'Feijão',
                'Lentilha',
                'Grão-de-bico',
                'Nozes',
                'Castanhas'
            ],

            'Laticínios' => ['Leite',
                'Iogurtes',
                'Coalhadas',
                'Queijos'
            ],
        ];

        foreach ($nutritionTypeArray as $groupName => $foods) {
            $groupId = App\ExerciseGroup::where('name', $groupName)->first()->id;

            foreach ($foods as $foodName) {
                App\Exercise::create(['name' => $foodName, 'exercise_group_id' => $groupId]);
            }
        }





        $fisioId = App\Sport::where('name', 'Fisioterapia')->first()->id;

        $fisioArray = [
            'Costas' => ['Puxar cotovelo sobre cabeça',
                'Mãos para trás',
                'Tocar o céu'],

            'Pernas' => ['Abraçar as pernas',
                'Alcançar o dedão',
                'Elevação',
                'Puxar o pé',
                'Pedido de casamento',
                'Esticar perna'],

            'Braços' => ['Agarrar dedos',
                'Agarrar dedos (invertido)'],

            'Ombros' => ['"Eu não sei"',
                'Cabeça para os lados'],

            'Joelhos' => ['Flexionar joelho'],
        ];

        foreach ($fisioArray as $groupName => $exercises) {
            $groupId = App\ExerciseGroup::where([['name', $groupName], ['sport_id', $fisioId]])->first()->id;

            foreach ($exercises as $exerciseName) {
                App\Exercise::create(['name' => $exerciseName, 'exercise_group_id' => $groupId]);
            }
        }

    }
}
