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
        Exams::create([
            'name' => 'test',
            'deploy_exam' => '2020/08/14 00:00:00',
            'finish_exam' => '2020/08/14 00:00:00',
            'duration' => '00:30:00',
            'active' => 'false',
            'number_questions' => '3',
            'number_subsections' => '2',
            'description' => 'Made in seeder',
            'questionary' => '{"id":1,"name":"First Exam test","deploy_exam":"2020-08-14 00:00:00","finish_exam":"2020-08-28 00:00:00","duration":"00:30:00","number_questions":15,"number_subsections":3,"description":"primer examen con json guradado","questionary":"[{\"id\": 1, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 2, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 3, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 4, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 5, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 6, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 7, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 8, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 9, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 10, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 11, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 12, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 13, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 14, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 15, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}]","user_id":1,"created_at":"2020-07-23T08:29:30.000000Z","updated_at":"2020-07-23T08:29:30.000000Z"}'
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
            'questionary' => '{"id":1,"name":"First Exam test","deploy_exam":"2020-08-14 00:00:00","finish_exam":"2020-08-28 00:00:00","duration":"00:30:00","number_questions":15,"number_subsections":3,"description":"primer examen con json guradado","questionary":"[{\"id\": 1, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 2, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 3, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 4, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 5, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 6, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 7, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 8, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 9, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 10, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 11, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 12, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 13, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 14, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}, {\"id\": 15, \"answers\": [{\"id\": 1, \"value\": false, \"answer\": null}, {\"id\": 2, \"value\": false, \"answer\": null}, {\"id\": 3, \"value\": false, \"answer\": null}], \"question\": null}]","user_id":1,"created_at":"2020-07-23T08:29:30.000000Z","updated_at":"2020-07-23T08:29:30.000000Z"}'
        ]);
    }
}
