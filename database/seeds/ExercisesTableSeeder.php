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
                'name' => "Dips",
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
    }
}
