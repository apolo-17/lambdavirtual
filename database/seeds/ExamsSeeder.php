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
                'name' => 'Primer consurso internacional',
                'deploy_exam' => '2020/08/14 00:00:00',
                'finish_exam' => '2020/08/14 00:00:00',
                'duration' => '5',
                'active' => 'false',
                'number_questions' => '3',
                'number_subsections' => '2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text',
                'questionary' => '[{"id": 1, "answers": [{"id": 1, "value": 1, "answer": "A"}, {"id": 2, "value": false, "answer": "B"}], "question": "Pregunta 1 ?", "answer_correct": "1", "answer_selected": null, "question_solved": false}, {"id": 2, "answers": [{"id": 1, "value": 1, "answer": "C"}, {"id": 2, "value": false, "answer": "D"}], "question": "Pregunta 2 ?", "answer_correct": "1", "answer_selected": null, "question_solved": false}, {"id": 3, "answers": [{"id": 1, "value": false, "answer": "E"}, {"id": 2, "value": 2, "answer": "F"}], "question": "Pregunta 3 ?", "answer_correct": "2", "answer_selected": null, "question_solved": false}, {"id": 4, "answers": [{"id": 1, "value": false, "answer": "G"}, {"id": 2, "value": 2, "answer": "H"}], "question": "Pregunta 4 ?", "answer_correct": "2", "answer_selected": null, "question_solved": false}, {"id": 5, "answers": [{"id": 1, "value": 1, "answer": "I"}, {"id": 2, "value": false, "answer": "J"}], "question": "Pregunta 5 ?", "answer_correct": "1", "answer_selected": null, "question_solved": false}]',
                'user_id' => '1'
                ]);

            Exams::create([
                'name' => 'Examen para conocimiento general',
                'deploy_exam' => '2020/08/14 00:00:00',
                'finish_exam' => '2020/08/14 00:00:00',
                'duration' => '30',
                'active' => 'false',
                'number_questions' => '3',
                'number_subsections' => '2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text',
                'questionary' => '[{"id": 1, "answers": [{"id": 1, "value": 1, "answer": "A"}, {"id": 2, "value": false, "answer": "B"}], "question": "Pregunta 1 ?", "answer_correct": "1", "answer_selected": null, "question_solved": false}, {"id": 2, "answers": [{"id": 1, "value": 1, "answer": "C"}, {"id": 2, "value": false, "answer": "D"}], "question": "Pregunta 2 ?", "answer_correct": "1", "answer_selected": null, "question_solved": false}, {"id": 3, "answers": [{"id": 1, "value": false, "answer": "E"}, {"id": 2, "value": 2, "answer": "F"}], "question": "Pregunta 3 ?", "answer_correct": "2", "answer_selected": null, "question_solved": false}, {"id": 4, "answers": [{"id": 1, "value": false, "answer": "G"}, {"id": 2, "value": 2, "answer": "H"}], "question": "Pregunta 4 ?", "answer_correct": "2", "answer_selected": null, "question_solved": false}, {"id": 5, "answers": [{"id": 1, "value": 1, "answer": "I"}, {"id": 2, "value": false, "answer": "J"}], "question": "Pregunta 5 ?", "answer_correct": "1", "answer_selected": null, "question_solved": false}]',
                'user_id' => '1'
            ]);
        }
    }
}
