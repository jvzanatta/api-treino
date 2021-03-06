CREATE DATABASE treino_app;
USE treino_app;
INSERT INTO treino_app.sports (name, measure, unit)
                  VALUES ("Musculação", 'kg', 'weight'), ("Natação", 'metros', 'length'), ("Corrida", 'km', 'length')
;
INSERT INTO treino_app.exercise_groups (name, sport_id)
                VALUES ("Outros", 1),
                ("Peito", 1),
                ("Costas", 1),
                ("Bíceps", 1),
                ("Tríceps", 1),
                ("Abdominais", 1),
                ("Panturrilha", 1),
                ("Antebraços", 1),
                ("Pernas",1),
                ("Ombros", 1)
;
INSERT INTO treino_app.exercises (name, exercise_group_id)
                  VALUES
                        ("Supino Reto", 2),
                        ("Supino Inclinado", 2),
                        ("Supino Plano", 2),
                        ("Supino Inclinado com Halteres", 2),
                        ("Cabo Crossover", 2),
                        ("Flexões", 2),
                        ("Flexões com Halteres", 2),
                        ("Supino com Halteres", 2),
                        ("Flexões Inclinadas", 2),
                        ("Flexões em Barras Paralelas", 2),
                        ("Crucifixo", 2),
                        ("Remada", 3),
                        ("Barra Fixa", 3),
                        ("Agachamentos", 3),
                        ("Pulldowns dorsais", 3),
                        ("Remada Sentada", 3),
                        ("Puxada de Halteres com 1 Braço", 3),
                        ("Encolhimento de Ombros", 3),
                        ("Remada Unilateral", 3),
                        ("Halteres Bent Over Row", 3),
                        ("Bent Over Row na Barra-T", 3),
                        ("Rosca", 4),
                        ("Rosca Direta", 4),
                        ("Rosca Martelo", 4),
                        ("Rosca Concentrada", 4),
                        ("Rosca Inversa", 4),
                        ("Rosca com Cabo", 4),
                        ("Rosca com Cabo Polia Baixa", 4),
                        ("Cabo Cruzado de Polia Baixa", 4),
                        ("Elevação de Haltere - Pronação Martelo no Banco", 4),
                        ("Elevação de Haltere - Pronação Martelo Levantado", 4),
                        ("Elevação de Haltere - Pronação Inferior 1 Braço", 4),
                        ("Supino de Aperto Fechado", 5),
                        ("Extensões de Tríceps", 5),
                        ("Kickback de Tríceps", 5),
                        ("Extensões de Tríceps 1 Braço com Halteres", 5),
                        ("Extensões de Tríceps com Barra", 5),
                        ("Dips", 5),
                        ("Pull Over", 5),
                        ("Flexão com Triângulo", 5),
                        ("Flexão com Triângulo e Banco", 5),
                        ("Dips", 5),
                        ("Supino", 6),
                        ("Levantamento de Pernas", 6),
                        ("Abdominais Laterais com Haltere", 6),
                        ("Flexões", 6),
                        ("Supino com Bola", 6),
                        ("Elevação de pernas em Banco", 6),
                        ("Elevação na Ponta dos Pés", 7),
                        ("Elevação na Ponta dos Pés com 1 Perna", 7),
                        ("Elevação de Panturrilha Sentado", 7),
                        ("Elevação em Pé de Barra com Gêmeos", 7),
                        ("Salto de Haltere com Gêmeos", 7),
                        ("Girar Pulsos com Halteres", 8),
                        ("Girar Pulsos com Barra", 8),
                        ("Twist de Pulso com Halteres", 8),
                        ("Standing Wrist Curl", 8),
                        ("Agachamento", 9),
                        ("Extensões de Pernas", 9),
                        ("Alongamento com Halteres", 9),
                        ("Elevação Frontal", 9),
                        ("Power Squats", 9),
                        ("Hack Squats", 9),
                        ("Flexão de Pernas Sentado", 9),
                        ("Agachamento com Barra", 9),
                        ("Investida com Barra", 9),
                        ("Agachamento Dividido Búlgaro", 9),
                        ("Agachamento de Perna Singular", 9),
                        ("Remada Alta", 10),
                        ("Desenvolvimento Sentado", 10),
                        ("Desenvolvimento Frontal Sentado", 10),
                        ("Elevação Lateral com Cabo", 10),
                        ("Elevação Lateral com Halteres", 10),
                        ("Elevação Frontal com Barra", 10),
                        ("Prensa Arnold", 10),
                        ("Elevação Frontal com Halteres", 10),
                        ("Pressão de Ombros com Halteres", 10),
                        ("Elevação Frontal com Cabo", 10),
                        ("Elevação Lateral Inclinada", 10)
;
INSERT INTO treino_app.workouts (name, created_by, schedule, sport_id, active)
                  VALUES ("workout1", 1, "135", 1, 1),
                        ("workout Dois", 1, "12356", 1, 1),
                        ("Terceiro workout", 1, "1345", 1, 0),
                        ("4º workout", 1, "0146", 1, 0)
;
INSERT INTO treino_app.workout_exercises (workout_id, exercise_id, day, weight, distance)
                  VALUES
                        (1, 1, '1', 12, null),
                        (1, 2, '1', 15, null),
                        (1, 8, '1', 20, null),
                        (1, 10, '1', 15, null),
                        (1, 23, '1', 10, null),
                        (1, 24, '1', 12, null),
                        (1, 28, '1', 10, null),
                        (1, 58, '1', 13, null),
                        (1, 60, '1', 15, null),
                        (1, 68, '1', 18, null),
                        (1, 12, '3', 17, null),
                        (1, 16, '3', 14, null),
                        (1, 19, '3', 12, null),
                        (1, 21, '3', 11, null),
                        (1, 33, '3', 16, null),
                        (1, 41, '3', 16, null),
                        (1, 38, '3', 16, null),
                        (1, 58, '3', 16, null),
                        (1, 59, '3', 13, null),
                        (1, 63, '3', 12, null),
                        (1, 64, '3', 15, null),
                        (1, 70, '5', 12, null),
                        (1, 74, '5', 13, null),
                        (1, 77, '5', 11, null),
                        (1, 78, '5', 17, null),
                        (1, 58, '5', 14, null),
                        (1, 46, '5', 18, null),
                        (1, 45, '5', 19, null),
                        (1, 68, '5', 20, null),
                        (1, 65, '5', 15, null),
                        (2, 1, '1', 12, null),
                        (2, 2, '1', 15, null),
                        (2, 8, '6', 20, null),
                        (2, 10, '6', 15, null),
                        (2, 23, '1', 10, null),
                        (2, 24, '2', 12, null),
                        (2, 28, '1', 10, null),
                        (2, 58, '2', 13, null),
                        (2, 60, '2', 15, null),
                        (2, 68, '1', 18, null),
                        (2, 12, '3', 17, null),
                        (2, 16, '6', 14, null),
                        (2, 19, '3', 12, null),
                        (2, 21, '3', 11, null),
                        (2, 33, '3', 16, null),
                        (2, 41, '6', 16, null),
                        (2, 38, '2', 16, null),
                        (2, 58, '3', 16, null),
                        (2, 59, '3', 13, null),
                        (2, 63, '2', 12, null),
                        (2, 64, '3', 15, null),
                        (2, 70, '5', 12, null),
                        (2, 74, '2', 13, null),
                        (2, 77, '5', 11, null),
                        (2, 78, '6', 17, null),
                        (2, 58, '5', 14, null),
                        (2, 46, '2', 18, null),
                        (2, 45, '5', 19, null),
                        (2, 68, '6', 20, null),
                        (2, 65, '5', 15, null);
INSERT INTO treino_app.user_workouts (user_id, workout_id)
                  VALUES
                        (1,1),
                        (1,2),
                        (1,3),
                        (1,4);
INSERT INTO treino_app.users (first_name, last_name, gender, email,  password, birth_date, weight, height, is_coach, facebook_id)
                  VALUES ("João Victor", "Zanatta", 'M', "João Victor", "joaovictor15@gmail.com",
                          "1990-07-31", 80.0, 1.79, 1,'10204869114888258'),
                  ("Paulo", "Pterson", 'M', "teste1@gmail.com", '321654',
                                            "1990-05-22", 80.0, 1.79,  1,null),
                  ("Anderson", "Rockman", 'M',  "teste2@gmail.com", '321654',
                                            "1990-05-22", 75.0, 1.69,  0,null),
                  ("Pedro", "Pereira", 'M',  "teste3@gmail.com", '321654',
                                            "1990-05-22", 85.0, 1.59,  0,null),
                  ("Juliana", "Massoni", 'F',  "teste4@gmail.com", '321654',
                                            "1990-05-22", 75.0, 1.72,  0,null),
                  ("Maria", "Quem", 'F',  "teste5@gmail.com", '321654',
                                            "1990-05-22", 72.0, 1.85,  1,null),
                  ("JuJu", "Delicia", 'F',  "teste6@gmail.com", '321654',
                                            "1990-05-22", 55.0, 1.64,  0,null);
