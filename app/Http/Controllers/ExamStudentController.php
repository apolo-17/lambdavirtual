<?php

namespace App\Http\Controllers;

use App\Exams;
use App\ExamStudent;
use App\StudentProfile;
use Illuminate\Http\Request;

class ExamStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($exam_id)
    {
        $student = StudentProfile::where('user_id',auth()->user()->id)->first();
        //dd($exam);
        $message = false;
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',true]])->first();
        if ($exam_student != null) {
            $message = true;

            return view('exam')->with(['exam_id' => $exam_id, 'message' => $message]);
        }

        return view('exam')->with(['exam_id' => $exam_id, 'message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($exam_id)
    {

        $student = StudentProfile::where('user_id',auth()->user()->id)->first();
        $exam = Exams::find($exam_id);
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',false]])->first();

        if ($exam_student == null) {
            $questionary = $this->structuringExam($exam->questionary);

            $exam_created = ExamStudent::create([
                'student_id' => $student->id,
                'exam_id' => $exam_id,
                'questionary' => $questionary,
                'done' => false
            ]);

            return $exam_created;
        } else {
            $exam_update = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',false]])->first();
            return $exam_update;
        }

    }

    public function updateExam($exam_student)
    {
        /* $exam_student->update([
            'questionary' =>
        ]); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function show(ExamStudent $examStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamStudent $examStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamStudent $examStudent)
    {

        $student = StudentProfile::where('user_id',auth()->user()->id)->first();
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$request->exam_id],['done',false]])->first();

        $exam = json_decode($exam_student->questionary);

        $question_solved = null;
        foreach ($exam as $key => $question) {
            if ($question->id == $request->question_solved['id']) {
                $question_solved = $key;
            }
        }

        $exam_replace = array_replace($exam,array($question_solved => $request->question_solved));

        $exam_student->update([
            'questionary' => json_encode($exam_replace)
        ]);

        return ExamStudent::find($exam_student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamStudent $examStudent)
    {
        //
    }

    public function structuringExam($exam)
    {
        $exam = json_decode($exam);
        foreach ($exam as $question) {
            foreach ($question->answers as $answer) {
                $answer->value = false;
            }
        }

        return json_encode($exam);
    }
}
