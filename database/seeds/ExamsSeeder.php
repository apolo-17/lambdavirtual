<?php

use App\Exams;
use Illuminate\Database\Seeder;

class ExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::isLocal()) {

            Exams::create([
                'name' => 'test',
                'deploy_exam' => '2020/08/14 00:00:00',
                'finish_exam' => '2020/08/14 00:00:00',
                'duration' => '00:30:00',
                'active' => 'false',
                'number_questions' => '3',
                'number_subsections' => '2',
                'description' => 'Made in seeder',
                'questionary' => '[{"id": 1, "answers": [{"id": 1, "value": true, "answer": "a"}, {"id": 2, "value": false, "answer": "b"}], "question": "Pregunta 1 ?"}, {"id": 2, "answers": [{"id": 1, "value": true, "answer": "c"}, {"id": 2, "value": false, "answer": "d"}], "question": "Pregunta 2 ?"}, {"id": 3, "answers": [{"id": 1, "value": false, "answer": "e"}, {"id": 2, "value": true, "answer": "f"}], "question": "Pregunta 3 ?"}]',
                'user_id' => '1'
                ]);

            Exams::create([
                'name' => 'test',
                'deploy_exam' => '2020/08/14 00:00:00',
                'finish_exam' => '2020/08/14 00:00:00',
                'duration' => '00:30:00',
                'active' => 'false',
                'number_questions' => '3',
                'number_subsections' => '2',
                'description' => 'Made in seeder',
                'questionary' => '[{"id": 1, "answers": [{"id": 1, "value": true, "answer": "a"}, {"id": 2, "value": false, "answer": "b"}], "question": "Pregunta 1 ?"}, {"id": 2, "answers": [{"id": 1, "value": true, "answer": "c"}, {"id": 2, "value": false, "answer": "d"}], "question": "Pregunta 2 ?"}, {"id": 3, "answers": [{"id": 1, "value": false, "answer": "e"}, {"id": 2, "value": true, "answer": "f"}], "question": "Pregunta 3 ?"}]',
                'user_id' => '1'
            ]);
        }
    }
}
